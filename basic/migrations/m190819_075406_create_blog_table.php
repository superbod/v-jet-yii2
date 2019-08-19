<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%blog}}`.
 */
class m190819_075406_create_blog_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%blog}}', [
            'id' => $this->primaryKey()->unique(),
            'text' => $this->text()->null(),
            'date' => $this->timestamp()->notNull(),
            'author_name' => $this->char(50)->null(),
            'name' => $this->char(250)->null()
        ]);

        $this->batchInsert('{{%blog}}',
            ['text','author_name','name'],
            [
                ['Blog posts started to get more and more like articles. As a bazillion blogs crowded the Internet, the bar began to raise.
                     Blog posts began to have more interviews. They presented interesting data. Posts got longer as bloggers sought to stand out and deliver more value, until 1,000 words has become fairly standard, and 2,000-word posts are not uncommon. SEO keywords? value lessened as Google cracked down on keyword-stuffed content. Also, as blogs got more professional, many hired editors.
                     On the article-writing side, there was also movement. Many print magazines began posting copies of their articles online. Suddenly, magazine headlines needed to drive traffic, just like blog-post headlines, and headline styles evolved. They published more opinion-driven pieces from thought leaders. Some also put up blogs where they let writers hit the button on their own.
                     Wordcounts shortened for print, as ad revenue migrated online. Some magazines went online-only. Their style got breezier and more casual.',
                    'Bogdan',
                    'Interesting and long Name form first post'
                ],
                ['Blog posts started to get more and more like articles. As a bazillion blogs crowded the Internet, the bar began to raise.
                     Blog posts began to have more interviews. They presented interesting data. Posts got longer as bloggers sought to stand out and deliver more value, until 1,000 words has become fairly standard, and 2,000-word posts are not uncommon. SEO keywords? value lessened as Google cracked down on keyword-stuffed content. Also, as blogs got more professional, many hired editors.
                     On the article-writing side, there was also movement. Many print magazines began posting copies of their articles online. Suddenly, magazine headlines needed to drive traffic, just like blog-post headlines, and headline styles evolved. They published more opinion-driven pieces from thought leaders. Some also put up blogs where they let writers hit the button on their own.
                     Wordcounts shortened for print, as ad revenue migrated online. Some magazines went online-only. Their style got breezier and more casual.',
                    'Bogdan',
                    'Interesting and long Name form first post'
                ],
                ['Blog posts started to get more and more like articles. As a bazillion blogs crowded the Internet, the bar began to raise.
                     Blog posts began to have more interviews. They presented interesting data. Posts got longer as bloggers sought to stand out and deliver more value, until 1,000 words has become fairly standard, and 2,000-word posts are not uncommon. SEO keywords? value lessened as Google cracked down on keyword-stuffed content. Also, as blogs got more professional, many hired editors.
                     On the article-writing side, there was also movement. Many print magazines began posting copies of their articles online. Suddenly, magazine headlines needed to drive traffic, just like blog-post headlines, and headline styles evolved. They published more opinion-driven pieces from thought leaders. Some also put up blogs where they let writers hit the button on their own.
                     Wordcounts shortened for print, as ad revenue migrated online. Some magazines went online-only. Their style got breezier and more casual.',
                    'Bogdan',
                    'Interesting and long Name form first post'
                ],
                ['Blog posts started to get more and more like articles. As a bazillion blogs crowded the Internet, the bar began to raise.
                     Blog posts began to have more interviews. They presented interesting data. Posts got longer as bloggers sought to stand out and deliver more value, until 1,000 words has become fairly standard, and 2,000-word posts are not uncommon. SEO keywords? value lessened as Google cracked down on keyword-stuffed content. Also, as blogs got more professional, many hired editors.
                     On the article-writing side, there was also movement. Many print magazines began posting copies of their articles online. Suddenly, magazine headlines needed to drive traffic, just like blog-post headlines, and headline styles evolved. They published more opinion-driven pieces from thought leaders. Some also put up blogs where they let writers hit the button on their own.
                     Wordcounts shortened for print, as ad revenue migrated online. Some magazines went online-only. Their style got breezier and more casual.',
                    'Bogdan',
                    'Interesting and long Name form first post'
                ],
                ['Blog posts started to get more and more like articles. As a bazillion blogs crowded the Internet, the bar began to raise.
                     Blog posts began to have more interviews. They presented interesting data. Posts got longer as bloggers sought to stand out and deliver more value, until 1,000 words has become fairly standard, and 2,000-word posts are not uncommon. SEO keywords? value lessened as Google cracked down on keyword-stuffed content. Also, as blogs got more professional, many hired editors.
                     On the article-writing side, there was also movement. Many print magazines began posting copies of their articles online. Suddenly, magazine headlines needed to drive traffic, just like blog-post headlines, and headline styles evolved. They published more opinion-driven pieces from thought leaders. Some also put up blogs where they let writers hit the button on their own.
                     Wordcounts shortened for print, as ad revenue migrated online. Some magazines went online-only. Their style got breezier and more casual.',
                    'Bogdan',
                    'Interesting and long Name form first post'
                ],
                ['Blog posts started to get more and more like articles. As a bazillion blogs crowded the Internet, the bar began to raise.
                     Blog posts began to have more interviews. They presented interesting data. Posts got longer as bloggers sought to stand out and deliver more value, until 1,000 words has become fairly standard, and 2,000-word posts are not uncommon. SEO keywords? value lessened as Google cracked down on keyword-stuffed content. Also, as blogs got more professional, many hired editors.
                     On the article-writing side, there was also movement. Many print magazines began posting copies of their articles online. Suddenly, magazine headlines needed to drive traffic, just like blog-post headlines, and headline styles evolved. They published more opinion-driven pieces from thought leaders. Some also put up blogs where they let writers hit the button on their own.
                     Wordcounts shortened for print, as ad revenue migrated online. Some magazines went online-only. Their style got breezier and more casual.',
                    'Bogdan',
                    'Interesting and long Name form first post'
                ],
                ['Blog posts started to get more and more like articles. As a bazillion blogs crowded the Internet, the bar began to raise.
                     Blog posts began to have more interviews. They presented interesting data. Posts got longer as bloggers sought to stand out and deliver more value, until 1,000 words has become fairly standard, and 2,000-word posts are not uncommon. SEO keywords? value lessened as Google cracked down on keyword-stuffed content. Also, as blogs got more professional, many hired editors.
                     On the article-writing side, there was also movement. Many print magazines began posting copies of their articles online. Suddenly, magazine headlines needed to drive traffic, just like blog-post headlines, and headline styles evolved. They published more opinion-driven pieces from thought leaders. Some also put up blogs where they let writers hit the button on their own.
                     Wordcounts shortened for print, as ad revenue migrated online. Some magazines went online-only. Their style got breezier and more casual.',
                    'Bogdan',
                    'Interesting and long Name form first post'
                ],
                ['Blog posts started to get more and more like articles. As a bazillion blogs crowded the Internet, the bar began to raise.
                     Blog posts began to have more interviews. They presented interesting data. Posts got longer as bloggers sought to stand out and deliver more value, until 1,000 words has become fairly standard, and 2,000-word posts are not uncommon. SEO keywords? value lessened as Google cracked down on keyword-stuffed content. Also, as blogs got more professional, many hired editors.
                     On the article-writing side, there was also movement. Many print magazines began posting copies of their articles online. Suddenly, magazine headlines needed to drive traffic, just like blog-post headlines, and headline styles evolved. They published more opinion-driven pieces from thought leaders. Some also put up blogs where they let writers hit the button on their own.
                     Wordcounts shortened for print, as ad revenue migrated online. Some magazines went online-only. Their style got breezier and more casual.',
                    'Bogdan',
                    'Interesting and long Name form first post'
                ],
                ['Blog posts started to get more and more like articles. As a bazillion blogs crowded the Internet, the bar began to raise.
                     Blog posts began to have more interviews. They presented interesting data. Posts got longer as bloggers sought to stand out and deliver more value, until 1,000 words has become fairly standard, and 2,000-word posts are not uncommon. SEO keywords? value lessened as Google cracked down on keyword-stuffed content. Also, as blogs got more professional, many hired editors.
                     On the article-writing side, there was also movement. Many print magazines began posting copies of their articles online. Suddenly, magazine headlines needed to drive traffic, just like blog-post headlines, and headline styles evolved. They published more opinion-driven pieces from thought leaders. Some also put up blogs where they let writers hit the button on their own.
                     Wordcounts shortened for print, as ad revenue migrated online. Some magazines went online-only. Their style got breezier and more casual.',
                    'Bogdan',
                    'Interesting and long Name form first post'
                ],
                ['Blog posts started to get more and more like articles. As a bazillion blogs crowded the Internet, the bar began to raise.
                     Blog posts began to have more interviews. They presented interesting data. Posts got longer as bloggers sought to stand out and deliver more value, until 1,000 words has become fairly standard, and 2,000-word posts are not uncommon. SEO keywords? value lessened as Google cracked down on keyword-stuffed content. Also, as blogs got more professional, many hired editors.
                     On the article-writing side, there was also movement. Many print magazines began posting copies of their articles online. Suddenly, magazine headlines needed to drive traffic, just like blog-post headlines, and headline styles evolved. They published more opinion-driven pieces from thought leaders. Some also put up blogs where they let writers hit the button on their own.
                     Wordcounts shortened for print, as ad revenue migrated online. Some magazines went online-only. Their style got breezier and more casual.',
                    'Bogdan',
                    'Interesting and long Name form first post'
                ],
                ['Blog posts started to get more and more like articles. As a bazillion blogs crowded the Internet, the bar began to raise.
                     Blog posts began to have more interviews. They presented interesting data. Posts got longer as bloggers sought to stand out and deliver more value, until 1,000 words has become fairly standard, and 2,000-word posts are not uncommon. SEO keywords? value lessened as Google cracked down on keyword-stuffed content. Also, as blogs got more professional, many hired editors.
                     On the article-writing side, there was also movement. Many print magazines began posting copies of their articles online. Suddenly, magazine headlines needed to drive traffic, just like blog-post headlines, and headline styles evolved. They published more opinion-driven pieces from thought leaders. Some also put up blogs where they let writers hit the button on their own.
                     Wordcounts shortened for print, as ad revenue migrated online. Some magazines went online-only. Their style got breezier and more casual.',
                    'Bogdan',
                    'Interesting and long Name form first post'
                ],
                ['Blog posts started to get more and more like articles. As a bazillion blogs crowded the Internet, the bar began to raise.
                     Blog posts began to have more interviews. They presented interesting data. Posts got longer as bloggers sought to stand out and deliver more value, until 1,000 words has become fairly standard, and 2,000-word posts are not uncommon. SEO keywords? value lessened as Google cracked down on keyword-stuffed content. Also, as blogs got more professional, many hired editors.
                     On the article-writing side, there was also movement. Many print magazines began posting copies of their articles online. Suddenly, magazine headlines needed to drive traffic, just like blog-post headlines, and headline styles evolved. They published more opinion-driven pieces from thought leaders. Some also put up blogs where they let writers hit the button on their own.
                     Wordcounts shortened for print, as ad revenue migrated online. Some magazines went online-only. Their style got breezier and more casual.',
                    'Bogdan',
                    'Interesting and long Name form first post'
                ],
                ['Blog posts started to get more and more like articles. As a bazillion blogs crowded the Internet, the bar began to raise.
                     Blog posts began to have more interviews. They presented interesting data. Posts got longer as bloggers sought to stand out and deliver more value, until 1,000 words has become fairly standard, and 2,000-word posts are not uncommon. SEO keywords? value lessened as Google cracked down on keyword-stuffed content. Also, as blogs got more professional, many hired editors.
                     On the article-writing side, there was also movement. Many print magazines began posting copies of their articles online. Suddenly, magazine headlines needed to drive traffic, just like blog-post headlines, and headline styles evolved. They published more opinion-driven pieces from thought leaders. Some also put up blogs where they let writers hit the button on their own.
                     Wordcounts shortened for print, as ad revenue migrated online. Some magazines went online-only. Their style got breezier and more casual.',
                    'Bogdan',
                    'Interesting and long Name form first post'
                ],
                ['Blog posts started to get more and more like articles. As a bazillion blogs crowded the Internet, the bar began to raise.
                     Blog posts began to have more interviews. They presented interesting data. Posts got longer as bloggers sought to stand out and deliver more value, until 1,000 words has become fairly standard, and 2,000-word posts are not uncommon. SEO keywords? value lessened as Google cracked down on keyword-stuffed content. Also, as blogs got more professional, many hired editors.
                     On the article-writing side, there was also movement. Many print magazines began posting copies of their articles online. Suddenly, magazine headlines needed to drive traffic, just like blog-post headlines, and headline styles evolved. They published more opinion-driven pieces from thought leaders. Some also put up blogs where they let writers hit the button on their own.
                     Wordcounts shortened for print, as ad revenue migrated online. Some magazines went online-only. Their style got breezier and more casual.',
                    'Bogdan',
                    'Interesting and long Name form first post'
                ],
                ['Blog posts started to get more and more like articles. As a bazillion blogs crowded the Internet, the bar began to raise.
                     Blog posts began to have more interviews. They presented interesting data. Posts got longer as bloggers sought to stand out and deliver more value, until 1,000 words has become fairly standard, and 2,000-word posts are not uncommon. SEO keywords? value lessened as Google cracked down on keyword-stuffed content. Also, as blogs got more professional, many hired editors.
                     On the article-writing side, there was also movement. Many print magazines began posting copies of their articles online. Suddenly, magazine headlines needed to drive traffic, just like blog-post headlines, and headline styles evolved. They published more opinion-driven pieces from thought leaders. Some also put up blogs where they let writers hit the button on their own.
                     Wordcounts shortened for print, as ad revenue migrated online. Some magazines went online-only. Their style got breezier and more casual.',
                    'Bogdan',
                    'Interesting and long Name form first post'
                ]
            ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%blog}}');
    }
}
