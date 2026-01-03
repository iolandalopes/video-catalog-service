<?php

namespace Tests\Unit\Domain\Entity;

use PHPUnit\Framework\TestCase;
use Core\Domain\Entity\Category;

class CategoryTest extends TestCase
{
    public function testCategoryCreation(): void
    {
        $category = new Category(
            id: 'cat123',
            name: 'Action',
            description: 'Category for all book products',
            isActive: true,
        );

        $this->assertEquals('Action', $category->name);
        $this->assertEquals('Category for all book products', $category->description);
        $this->assertEquals(true, $category->isActive);
    }

    public function testActivateEntity(): void
    {
        $category = new Category(
            id: 'cat124',
            name: 'Comedy',
            isActive: false,
        );

        $category->activate();
        $this->assertTrue($category->isActive);
    }

    public function testDeactivateEntity(): void
    {
        $category = new Category(
            id: 'cat124',
            name: 'Comedy',
            isActive: true,
        );

        $category->deactivate();
        $this->assertFalse($category->isActive);
    }

    public function testUpdateEntity(): void
    {
        $category = new Category(
            id: 'cat125',
            name: 'Comedics',
            description: 'Category for clothing products',
            isActive: true,
        );

        $category->update('Science fiction', 'Updated description for apparel products');

        $this->assertEquals('Science fiction', $category->name);
        $this->assertEquals('Updated description for apparel products', $category->description);
        $this->assertTrue($category->isActive);
    }
}