<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%comments}}`.
 */
class m190819_084508_create_comments_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%comments}}', [
            'id' => $this->primaryKey(),
            'blogID' => $this->integer(11)->null(),
            'time' => $this->timestamp()->notNull(),
            'comment' => $this->text()->notNull(),
            'author_name' => $this->char(50)->null()
        ]);

        $this->batchInsert('{{%comments}}',
            ['blogID','comment','author_name'],
            [
                ['1', 'i like this post. It\'s exactly what i\'m looked for', 'Bogdan'],
                ['1', 'i like this post. It\'s exactly what i\'m looked for', 'Bogdan'],
                ['1', 'i like this post. It\'s exactly what i\'m looked for', 'Bogdan'],
                ['2', 'i like this post. It\'s exactly what i\'m looked for', 'Bogdan'],
                ['2', 'i like this post. It\'s exactly what i\'m looked for', 'Bogdan'],
                ['2', 'i like this post. It\'s exactly what i\'m looked for', 'Bogdan'],
                ['3', 'i like this post. It\'s exactly what i\'m looked for', 'Bogdan'],
                ['3', 'i like this post. It\'s exactly what i\'m looked for', 'Bogdan'],
                ['3', 'i like this post. It\'s exactly what i\'m looked for', 'Bogdan'],
                ['4', 'i like this post. It\'s exactly what i\'m looked for', 'Bogdan'],
                ['4', 'i like this post. It\'s exactly what i\'m looked for', 'Bogdan'],
                ['4', 'i like this post. It\'s exactly what i\'m looked for', 'Bogdan'],
                ['5', 'i like this post. It\'s exactly what i\'m looked for', 'Bogdan'],
                ['5', 'i like this post. It\'s exactly what i\'m looked for', 'Bogdan'],
                ['5', 'i like this post. It\'s exactly what i\'m looked for', 'Bogdan'],
                ['6', 'i like this post. It\'s exactly what i\'m looked for', 'Bogdan'],
                ['6', 'i like this post. It\'s exactly what i\'m looked for', 'Bogdan'],
                ['6', 'i like this post. It\'s exactly what i\'m looked for', 'Bogdan'],
                ['7', 'i like this post. It\'s exactly what i\'m looked for', 'Bogdan'],
                ['7', 'i like this post. It\'s exactly what i\'m looked for', 'Bogdan'],
                ['7', 'i like this post. It\'s exactly what i\'m looked for', 'Bogdan'],
                ['7', 'i like this post. It\'s exactly what i\'m looked for', 'Bogdan'],
                ['7', 'i like this post. It\'s exactly what i\'m looked for', 'Bogdan'],
                ['7', 'i like this post. It\'s exactly what i\'m looked for', 'Bogdan'],
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%comments}}');
    }
}
