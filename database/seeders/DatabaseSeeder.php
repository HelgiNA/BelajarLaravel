<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
use App\Models\Category;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         User::factory(10)->create();

      //  User::factory()->create([
      //      'name' => 'Test User',
      //      'email' => 'test@example.com',
      //  ]);
        
        Post:: factory(20)->create();
        
        // Post::create([
        //   'title' => 'Postingan Pertama',
        //   'user_id' => 1,
        //   'category_id' => 1,
        //   'slug' => 'postingan-pertama',
        //   'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In egestas augue tellus, quis rhoncus leo facilisis eget. Fusce porta justo id eros dignissim scelerisque.',
        //   'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In egestas augue tellus, quis rhoncus leo facilisis eget. Fusce porta justo id eros dignissim scelerisque.</p><p> Ut congue mattis sapien, eu vulputate arcu hendrerit ut. Suspendisse a ex augue. Sed convallis sem in neque tempus pharetra. Integer in ligula enim. Morbi nec pellentesque dui.</p><p> Nullam non ex ornare, bibendum risus tempus, blandit dolor. Mauris bibendum ante nisl, et sodales lectus molestie vel. Fusce sem mi, convallis eget turpis non, ultricies ultricies orci. In hac habitasse platea dictumst.</p>'
        // ]);
        
        // Post::create([
        //   'title' => 'Postingan Ke Dua',
        //   'user_id' => 1,
        //   'category_id' => 2,
        //   'slug' => 'postingan-ked-dua',
        //   'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In egestas augue tellus, quis rhoncus leo facilisis eget. Fusce porta justo id eros dignissim scelerisque.',
        //   'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In egestas augue tellus, quis rhoncus leo facilisis eget. Fusce porta justo id eros dignissim scelerisque.</p><p> Ut congue mattis sapien, eu vulputate arcu hendrerit ut. Suspendisse a ex augue. Sed convallis sem in neque tempus pharetra. Integer in ligula enim. Morbi nec pellentesque dui.</p><p> Nullam non ex ornare, bibendum risus tempus, blandit dolor. Mauris bibendum ante nisl, et sodales lectus molestie vel. Fusce sem mi, convallis eget turpis non, ultricies ultricies orci. In hac habitasse platea dictumst.</p>'
        // ]);
        
        Category::create([
          'name' => 'Develover',
          'slug' => 'develover'
        ]);
        
        Category::create([
          'name' => 'Web Design',
          'slug' => 'web-design'
        ]);
        
        Category::create([
          'name' => 'School',
          'slug' => 'school'
        ]);
    }
}
