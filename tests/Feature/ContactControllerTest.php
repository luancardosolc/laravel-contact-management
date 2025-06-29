<?php

namespace Tests\Feature;

use App\Models\Contact;
use App\Models\User;
use App\Models\Role;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ContactControllerTest extends TestCase
{
    use RefreshDatabase;

    protected User $admin;

    protected function setUp(): void
    {
        parent::setUp();
        $this->seed(\Database\Seeders\RoleSeeder::class);
        $adminRole = Role::where('name', 'admin')->first();
        $this->admin = User::factory()->create(['role_id' => $adminRole->id]);
    }

    /** @test */
    public function it_requires_authentication_to_create_contact()
    {
        $response = $this->get(route('contacts.create'));
        $response->assertRedirect(route('login'));
    }

    /** @test */
    public function it_validates_required_fields_when_creating_a_contact()
    {
        $response = $this->actingAs($this->admin)->post(route('contacts.store'), []);

        $response->assertSessionHasErrors(['name', 'contact', 'email']);
    }

    /** @test */
    public function it_validates_unique_fields_when_creating_a_contact()
    {
        $existingContact = Contact::factory()->create();

        $response = $this->actingAs($this->admin)->post(route('contacts.store'), [
            'name' => 'New Contact',
            'contact' => $existingContact->contact,
            'email' => $existingContact->email,
        ]);

        $response->assertSessionHasErrors(['contact', 'email']);
    }

    /** @test */
    public function it_validates_email_format_when_creating_a_contact()
    {
        $response = $this->actingAs($this->admin)->post(route('contacts.store'), [
            'name' => 'New Contact',
            'contact' => '1234567890',
            'email' => 'invalid-email',
        ]);

        $response->assertSessionHasErrors(['email']);
    }

    /** @test */
    public function it_validates_phone_number_format_when_creating_a_contact()
    {
        $response = $this->actingAs($this->admin)->post(route('contacts.store'), [
            'name' => 'New Contact',
            'contact' => 'not-a-phone-number',
            'email' => 'new@example.com',
        ]);

        $response->assertSessionHasErrors(['contact']);
    }

    /** @test */
    public function it_requires_authentication_to_edit_contact()
    {
        $contact = Contact::factory()->create();
        $response = $this->get(route('contacts.edit', $contact));
        $response->assertRedirect(route('login'));
    }

    /** @test */
    public function it_validates_required_fields_when_updating_a_contact()
    {
        $contact = Contact::factory()->create();

        $response = $this->actingAs($this->admin)->put(route('contacts.update', $contact), []);

        $response->assertSessionHasErrors(['name', 'contact', 'email']);
    }

    /** @test */
    public function it_validates_unique_fields_when_updating_a_contact()
    {
        $contactToUpdate = Contact::factory()->create();
        $existingContact = Contact::factory()->create();

        $response = $this->actingAs($this->admin)->put(route('contacts.update', $contactToUpdate), [
            'name' => 'Updated Name',
            'contact' => $existingContact->contact,
            'email' => $existingContact->email,
        ]);

        $response->assertSessionHasErrors(['contact', 'email']);
    }

    /** @test */
    public function it_validates_email_format_when_updating_a_contact()
    {
        $contact = Contact::factory()->create();

        $response = $this->actingAs($this->admin)->put(route('contacts.update', $contact), [
            'name' => 'Updated Name',
            'contact' => '1234567890',
            'email' => 'invalid-email',
        ]);

        $response->assertSessionHasErrors(['email']);
    }

    /** @test */
    public function it_validates_phone_number_format_when_updating_a_contact()
    {
        $contact = Contact::factory()->create();

        $response = $this->actingAs($this->admin)->put(route('contacts.update', $contact), [
            'name' => 'Updated Name',
            'contact' => 'not-a-phone-number',
            'email' => 'updated@example.com',
        ]);

        $response->assertSessionHasErrors(['contact']);
    }
}
