<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Teacher;
use App\Models\Area;
use App\Models\TrainingCenter;
use App\Models\Apprentice;
use App\Models\Computer;
use App\Models\Training_center;
use Illuminate\Http\Request;


class OrmController extends Controller
{


public function consultas1() {


    $area = Area::find(2);
    return $area->teachers;
    
}

public function consultas2() {
    $trainer_center = Training_center::find(1);
    return $trainer_center->Courses;
}
public function consultas3() {
    $course = Course::find(5);
    return $course->apprentices;
}
public function consultas4() {
    $apprentice = Apprentice::find(5);
    // return $apprentice->computer;
    return $apprentice->course;
   
}





    // public function index()
    // {
    //     // Example of using Eloquent ORM to retrieve all teachers
    //     $teachers = \App\Models\Teacher::all();

    //     // Return the view with the data
    //     return view('orm.index', compact('teachers'));
    // }

    // public function show($id)
    // {
    //     // Example of using Eloquent ORM to retrieve a specific teacher
    //     $teacher = \App\Models\Teacher::findOrFail($id);

    //     // Return the view with the data
    //     return view('orm.show', compact('teacher'));
    // }
    // public function create()
    // {
    //     // Return the view to create a new teacher
    //     return view('orm.create');
    // }
    // public function store(Request $request)
    // {
    //     // Validate the request data
    //     $request->validate([
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|email|unique:teachers,email',
    //         // Add other validation rules as needed
    //     ]);

    //     // Create a new teacher using Eloquent ORM
    //     $teacher = new \App\Models\Teacher();
    //     $teacher->name = $request->input('name');
    //     $teacher->email = $request->input('email');
    //     // Set other attributes as needed
    //     $teacher->save();

    //     // Redirect to the index page with a success message
    //     return redirect()->route('orm.index')->with('success', 'Teacher created successfully.');
    // }
    // public function edit($id)
    // {
    //     // Example of using Eloquent ORM to retrieve a specific teacher for editing
    //     $teacher = \App\Models\Teacher::findOrFail($id);

    //     // Return the view with the data
    //     return view('orm.edit', compact('teacher'));
    // }
    // public function update(Request $request, $id)
    // {
    //     // Validate the request data
    //     $request->validate([
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|email|unique:teachers,email,' . $id,
    //         // Add other validation rules as needed
    //     ]);

    //     // Example of using Eloquent ORM to update a specific teacher
    //     $teacher = \App\Models\Teacher::findOrFail($id);
    //     $teacher->name = $request->input('name');
    //     $teacher->email = $request->input('email');
    //     // Update other attributes as needed
    //     $teacher->save();

    //     // Redirect to the index page with a success message
    //     return redirect()->route('orm.index')->with('success', 'Teacher updated successfully.');
    // }
    // public function destroy($id)
    // {
    //     // Example of using Eloquent ORM to delete a specific teacher
    //     $teacher = \App\Models\Teacher::findOrFail($id);
    //     $teacher->delete();

    //     // Redirect to the index page with a success message
    //     return redirect()->route('orm.index')->with('success', 'Teacher deleted successfully.');
    // }
    // public function search(Request $request)
    // {
    //     // Example of using Eloquent ORM to search for teachers
    //     $query = $request->input('query');
    //     $teachers = \App\Models\Teacher::where('name', 'LIKE', '%' . $query . '%')->get();

    //     // Return the view with the data
    //     return view('orm.index', compact('teachers'));
    // }
    // public function filter(Request $request)
    // {
    //     // Example of using Eloquent ORM to filter teachers by area
    //     $areaId = $request->input('area_id');
    //     $teachers = \App\Models\Teacher::where('area_id', $areaId)->get();

    //     // Return the view with the data
    //     return view('orm.index', compact('teachers'));
    // }
    // public function sort(Request $request)
    // {
    //     // Example of using Eloquent ORM to sort teachers by name
    //     $sortBy = $request->input('sort_by', 'name');
    //     $teachers = \App\Models\Teacher::orderBy($sortBy)->get();

    //     // Return the view with the data
    //     return view('orm.index', compact('teachers'));
    // }
    // public function paginate(Request $request)
    // {
    //     // Example of using Eloquent ORM to paginate teachers
    //     $perPage = $request->input('per_page', 10);
    //     $teachers = \App\Models\Teacher::paginate($perPage);

    //     // Return the view with the data
    //     return view('orm.index', compact('teachers'));
    // }
    // public function relationships()
    // {
    //     // Example of using Eloquent ORM to retrieve related models
    //     $teachers = \App\Models\Teacher::with('area', 'training_centers', 'courses')->get();

    //     // Return the view with the data
    //     return view('orm.relationships', compact('teachers'));
    // }
    // public function massUpdate(Request $request)
    // {
    //     // Example of using Eloquent ORM to perform a mass update
    //     $ids = $request->input('ids');
    //     $data = $request->input('data');

    //     \App\Models\Teacher::whereIn('id', $ids)->update($data);

    //     // Redirect to the index page with a success message
    //     return redirect()->route('orm.index')->with('success', 'Teachers updated successfully.');
    // }
    // public function massDelete(Request $request)
    // {
    //     // Example of using Eloquent ORM to perform a mass delete
    //     $ids = $request->input('ids');

    //     \App\Models\Teacher::whereIn('id', $ids)->delete();

    //     // Redirect to the index page with a success message
    //     return redirect()->route('orm.index')->with('success', 'Teachers deleted successfully.');
    // }
    // public function massCreate(Request $request)
    // {
    //     // Example of using Eloquent ORM to perform a mass create
    //     $data = $request->input('data');

    //     foreach ($data as $item) {
    //         $teacher = new \App\Models\Teacher();
    //         $teacher->name = $item['name'];
    //         $teacher->email = $item['email'];
    //         // Set other attributes as needed
    //         $teacher->save();
    //     }

    //     // Redirect to the index page with a success message
    //     return redirect()->route('orm.index')->with('success', 'Teachers created successfully.');
    // }
    // public function massExport(Request $request)
    // {
    //     // Example of using Eloquent ORM to perform a mass export
    //     $ids = $request->input('ids');
    //     $teachers = \App\Models\Teacher::whereIn('id', $ids)->get();

    //     // Export logic (e.g., CSV, Excel) goes here

    //     // Redirect to the index page with a success message
    //     return redirect()->route('orm.index')->with('success', 'Teachers exported successfully.');
    // }
    // public function massImport(Request $request)
    // {
    //     // Example of using Eloquent ORM to perform a mass import
    //     $file = $request->file('file');

    //     // Import logic (e.g., CSV, Excel) goes here

    //     // Redirect to the index page with a success message
    //     return redirect()->route('orm.index')->with('success', 'Teachers imported successfully.');
    // }
    // public function massSync(Request $request)
    // {
    //     // Example of using Eloquent ORM to perform a mass sync
    //     $ids = $request->input('ids');
    //     $data = $request->input('data');

    //     \App\Models\Teacher::whereIn('id', $ids)->sync($data);

    //     // Redirect to the index page with a success message
    //     return redirect()->route('orm.index')->with('success', 'Teachers synced successfully.');
    // }
    // public function massDetach(Request $request)
    // {
    //     // Example of using Eloquent ORM to perform a mass detach
    //     $ids = $request->input('ids');
    //     $data = $request->input('data');

    //     \App\Models\Teacher::whereIn('id', $ids)->detach($data);

    //     // Redirect to the index page with a success message
    //     return redirect()->route('orm.index')->with('success', 'Teachers detached successfully.');
    // }
    // public function massAttach(Request $request)
    // {
    //     // Example of using Eloquent ORM to perform a mass attach
    //     $ids = $request->input('ids');
    //     $data = $request->input('data');

    //     \App\Models\Teacher::whereIn('id', $ids)->attach($data);

    //     // Redirect to the index page with a success message
    //     return redirect()->route('orm.index')->with('success', 'Teachers attached successfully.');
    // }
    // public function massRestore(Request $request)
    // {
    //     // Example of using Eloquent ORM to perform a mass restore
    //     $ids = $request->input('ids');

    //     \App\Models\Teacher::withTrashed()->whereIn('id', $ids)->restore();

    //     // Redirect to the index page with a success message
    //     return redirect()->route('orm.index')->with('success', 'Teachers restored successfully.');
    // }
    // public function massForceDelete(Request $request)
    // {
    //     // Example of using Eloquent ORM to perform a mass force delete
    //     $ids = $request->input('ids');

    //     \App\Models\Teacher::withTrashed()->whereIn('id', $ids)->forceDelete();

    //     // Redirect to the index page with a success message
    //     return redirect()->route('orm.index')->with('success', 'Teachers permanently deleted successfully.');
    // }
    // public function massSoftDelete(Request $request)
    // {
    //     // Example of using Eloquent ORM to perform a mass soft delete
    //     $ids = $request->input('ids');

    //     \App\Models\Teacher::whereIn('id', $ids)->delete();

    //     // Redirect to the index page with a success message
    //     return redirect()->route('orm.index')->with('success', 'Teachers soft deleted successfully.');
    // }
    // public function massRestoreSoftDelete(Request $request)
    // {
    //     // Example of using Eloquent ORM to perform a mass restore of soft deleted teachers
    //     $ids = $request->input('ids');

    //     \App\Models\Teacher::onlyTrashed()->whereIn('id', $ids)->restore();

    //     // Redirect to the index page with a success message
    //     return redirect()->route('orm.index')->with('success', 'Teachers restored successfully.');
    // }
    // public function massForceDeleteSoftDelete(Request $request)
    // {
    //     // Example of using Eloquent ORM to perform a mass force delete of soft deleted teachers
    //     $ids = $request->input('ids');

    //     \App\Models\Teacher::onlyTrashed()->whereIn('id', $ids)->forceDelete();

    //     // Redirect to the index page with a success message
    //     return redirect()->route('orm.index')->with('success', 'Teachers permanently deleted successfully.');
    // }
    // public function massSoftDeleteSoftDelete(Request $request)
    // {
    //     // Example of using Eloquent ORM to perform a mass soft delete of soft deleted teachers
    //     $ids = $request->input('ids');

    //     \App\Models\Teacher::onlyTrashed()->whereIn('id', $ids)->delete();

    //     // Redirect to the index page with a success message
    //     return redirect()->route('orm.index')->with('success', 'Teachers soft deleted successfully.');
    // }
    // public function massRestoreSoftDeleteSoftDelete(Request $request)
    // {
    //     // Example of using Eloquent ORM to perform a mass restore of soft deleted teachers
    //     $ids = $request->input('ids');

    //     \App\Models\Teacher::onlyTrashed()->whereIn('id', $ids)->restore();

    //     // Redirect to the index page with a success message
    //     return redirect()->route('orm.index')->with('success', 'Teachers restored successfully.');
    // }
    // public function massForceDeleteSoftDeleteSoftDelete(Request $request)
    // {
    //     // Example of using Eloquent ORM to perform a mass force delete of soft deleted teachers
    //     $ids = $request->input('ids');

    //     \App\Models\Teacher::onlyTrashed()->whereIn('id', $ids)->forceDelete();

    //     // Redirect to the index page with a success message
    //     return redirect()->route('orm.index')->with('success', 'Teachers permanently deleted successfully.');
    // }
    // public function massSoftDeleteSoftDeleteSoftDelete(Request $request)
    // {
    //     // Example of using Eloquent ORM to perform a mass soft delete of soft deleted teachers
    //     $ids = $request->input('ids');

    //     \App\Models\Teacher::onlyTrashed()->whereIn('id', $ids)->delete();

    //     // Redirect to the index page with a success message
    //     return redirect()->route('orm.index')->with('success', 'Teachers soft deleted successfully.');
    // }
}
