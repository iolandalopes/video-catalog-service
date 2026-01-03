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
            name: 'Books',
            description: 'Category for all book products',
            isActive: true,
        );

        $this->assertEquals('Books', $category->name);
        $this->assertEquals('Category for all book products', $category->description);
        $this->assertEquals(true, $category->isActive);
    }

    public function testActivateEntity(): void
    {
        $category = new Category(
            id: 'cat124',
            name: 'Electronics',
            isActive: false,
        );

        $category->activate();
        $this->assertTrue($category->isActive);
    }

    public function testDeactivateEntity(): void
    {
        $category = new Category(
            id: 'cat124',
            name: 'Electronics',
            isActive: true,
        );

        $category->deactivate();
        $this->assertFalse($category->isActive);
    }
}