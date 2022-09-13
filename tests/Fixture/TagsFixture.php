<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TagsFixture
 */
class TagsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'title' => 'Lorem ipsum dolor sit amet',
                'created' => '2022-09-09 01:00:41',
                'modified' => '2022-09-09 01:00:41',
            ],
        ];
        parent::init();
    }
}
