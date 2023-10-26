<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
class eCategoryContrl extends Controller
{
    public function storeCategory(Request $request){

        // dd($request->all());
        // Validate the form data, including the image
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',  
            // 'description' => 'required'
        ]);


        // Insert the categories into the second database
        DB::connection('second_database')->beginTransaction();

        try {
            $data = Arr::except($request->toArray(), ['_token']);
            
            // Handle image upload
            if ($request->hasFile('avatar')) {
                // Store the uploaded file and get its path
                $avatarPath = $request->file('avatar')->store('categories/avatars', 'public');
                $data['avatar'] = $avatarPath;
            }
            DB::connection('second_database')->table('categories')->insert($data);

            // Commit the transaction
            DB::connection('second_database')->commit();

            // Optionally, you can add a success message
            session()->flash('successMessage', 'Category created successfully.');
        } catch (\Exception $e) {
            // Rollback the transaction in case of an error
            DB::connection('second_database')->rollback();

            // Handle the exception
            session()->flash('errorMessage', 'Error: ' . $e->getMessage());
        }

        // Redirect back to the categories listing page or another appropriate page
        return redirect()->route('categories');
    }

    public function destroyCategory($id)
    {
        // Switch to the second database connection
        DB::connection('second_database')->beginTransaction();
    
        try {
            // Find the Category by its ID from the second database
            $category = DB::connection('second_database')
                ->table('categories')
                ->where('id', $id)
                ->first();
    
            // Check if the category exists
            if (!$category) {
                // Handle the case where the category doesn't exist (e.g., show an error message)
                session()->flash('errorMessage', 'Category not found.');
                return redirect()->route('categories'); // Redirect to the categories listing page
            }
    
            // Delete the categories
            DB::connection('second_database')
                ->table('categories')
                ->where('id', $id)
                ->delete();
    
            // Commit the transaction
            DB::connection('second_database')->commit();
    
            // Optionally, you can also flash a success message
            session()->flash('successMessage', 'Category has been deleted successfully.');
    
            // Redirect back to the category listing page or another appropriate page
            return redirect()->back();
        } catch (\Exception $e) {
            // Rollback the transaction in case of an error
            DB::connection('second_database')->rollback();
    
            // Handle the exception
            session()->flash('errorMessage', 'Error: ' . $e->getMessage());
    
            // Redirect back to the category listing page or another appropriate page
            return redirect()->back();
        }
    }
    public function storeTag(Request $request){

        // dd($request->all());
        // Validate the form data, including the image
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',  
            // 'description' => 'required'
        ]);


        // Insert the categories into the second database
        DB::connection('second_database')->beginTransaction();

        try {
            $data = Arr::except($request->toArray(), ['_token']);
            
            // Handle image upload
            if ($request->hasFile('avatar')) {
                // Store the uploaded file and get its path
                $avatarPath = $request->file('avatar')->store('tags/avatars', 'public');
                $data['avatar'] = $avatarPath;
            }
            DB::connection('second_database')->table('tags')->insert($data);

            // Commit the transaction
            DB::connection('second_database')->commit();

            // Optionally, you can add a success message
            session()->flash('successMessage', 'Tag created successfully.');
        } catch (\Exception $e) {
            // Rollback the transaction in case of an error
            DB::connection('second_database')->rollback();

            // Handle the exception
            session()->flash('errorMessage', 'Error: ' . $e->getMessage());
        }

        // Redirect back to the categories listing page or another appropriate page
        return redirect()->route('tags');
    }

    public function destroyTag($id)
    {
        // Switch to the second database connection
        DB::connection('second_database')->beginTransaction();
    
        try {
            // Find the Category by its ID from the second database
            $category = DB::connection('second_database')
                ->table('tags')
                ->where('id', $id)
                ->first();
    
            // Check if the category exists
            if (!$category) {
                // Handle the case where the category doesn't exist (e.g., show an error message)
                session()->flash('errorMessage', 'Tag not found.');
                return redirect()->route('tags'); // Redirect to the categories listing page
            }
    
            // Delete the categories
            DB::connection('second_database')
                ->table('tags')
                ->where('id', $id)
                ->delete();
    
            // Commit the transaction
            DB::connection('second_database')->commit();
    
            // Optionally, you can also flash a success message
            session()->flash('successMessage', 'Tag has been deleted successfully.');
    
            // Redirect back to the category listing page or another appropriate page
            return redirect()->back();
        } catch (\Exception $e) {
            // Rollback the transaction in case of an error
            DB::connection('second_database')->rollback();
    
            // Handle the exception
            session()->flash('errorMessage', 'Error: ' . $e->getMessage());
    
            // Redirect back to the category listing page or another appropriate page
            return redirect()->back();
        }
    }
}
