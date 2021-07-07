<?php

namespace Tests\Feature;

use Domain\Contacts\Models\Contact;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase, HasFactory;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_contacts_table_is_searchable()
    {
        Contact::factory()->create(['name' => 'foo']);
        Contact::factory()->create(['name' => 'bar']);

        Livewire::test('contacts-table')
            ->assertSee('foo')
            ->assertSee('bar')
            ->set('search', 'foo')
            ->assertSee('foo')
            ->assertDontSee('bar');
    }
}
