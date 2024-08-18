<?php

namespace Tests\Feature\Behavioral;

use App\Http\Controllers\Behavioral\SimpleIterator;
use App\Models\Behavioral\Book;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class IteratorTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        self::assertTrue(true);
    }

    public static function booksDataProvider()
    {
        yield 'Books' => [
            'books' => [
                new Book('1234567890', 'Book 1'),
                new Book('9876543210', 'Book 2'),
                new Book('0123456789', 'Book 3'),
            ]
        ];
    }

    public function testBooks(array $books)
    {
        $iterator = new SimpleIterator($books);
    }

}
