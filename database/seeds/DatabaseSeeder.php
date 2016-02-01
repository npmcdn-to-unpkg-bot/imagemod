<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserTableSeeder::class);
        $this->call(ImagesSeeder::class);
    }
}

/**
*  Image Seeder
*/
class ImagesSeeder extends Seeder
{
	
	public function run()
	{
		DB::table('images')->delete();
		Image::create([
			'file_name' => 'first.jpg',
			]);
		Image::create([
			'file_name' => 'second.jpg',
			]);
		Image::create([
			'file_name' => 'third.jpg',
			]);
	}
}
