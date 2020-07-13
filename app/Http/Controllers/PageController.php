<?php

namespace App\Http\Controllers;

use App\Course;
use App\Page;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function getIndex($slug)
    {
        $data['page'] = Page::where('slug', $slug)->first();
        return view('page.index', $data);
    }

    public function getCourse($id, $i)
    {
        $data['course'] = Course::where('degrees_id', $id)->get();
        $data['count_course'] = Course::where('degrees_id', $id)->count();
        $data['get_i'] = $i;
        $data['degree'] = $id;

        return view('page.course', $data);
    }

    public function getChart()
    {
        return view('page.orgchart');
    }

    public function getAdministrator()
    {
        $data['getAd1'] = DB::table('personals')
            ->where('position_id', 1)
            ->join('positions', 'personals.position_id', '=', 'positions.id')
            ->join('academics', 'personals.academic_id', '=', 'academics.id')
            ->select('personals.*', 'positions.name as position_name', 'academics.short_name as academic_name')
            ->first();

        $data['getAd2'] = DB::table('personals')
            ->where('position_id', 3)
            ->join('positions', 'personals.position_id', '=', 'positions.id')
            ->join('academics', 'personals.academic_id', '=', 'academics.id')
            ->select('personals.*', 'positions.name as position_name', 'academics.short_name as academic_name')
            ->get();

        $data['getAd3'] = DB::table('personals')
            ->where('position_id', 2)
            ->join('positions', 'personals.position_id', '=', 'positions.id')
            ->join('academics', 'personals.academic_id', '=', 'academics.id')
            ->select('personals.*', 'positions.name as position_name', 'academics.short_name as academic_name')
            ->get();

        $data['getAd4'] = DB::table('personals')
            ->where('position_id', 4)
            ->join('positions', 'personals.position_id', '=', 'positions.id')
            ->join('academics', 'personals.academic_id', '=', 'academics.id')
            ->select('personals.*', 'positions.name as position_name', 'academics.short_name as academic_name')
            ->first();

        $data['getAd5'] = DB::table('personals')
            ->where('position_id', 5)
            ->join('positions', 'personals.position_id', '=', 'positions.id')
            ->join('academics', 'personals.academic_id', '=', 'academics.id')
            ->select('personals.*', 'positions.name as position_name', 'academics.short_name as academic_name')
            ->first();

        $data['getAd6'] = DB::table('personals')
            ->where('position_id', 6)
            ->join('positions', 'personals.position_id', '=', 'positions.id')
            ->join('academics', 'personals.academic_id', '=', 'academics.id')
            ->select('personals.*', 'positions.name as position_name', 'academics.short_name as academic_name')
            ->first();

        $data['getAd7'] = DB::table('personals')
            ->where('position_id', 7)
            ->join('positions', 'personals.position_id', '=', 'positions.id')
            ->join('academics', 'personals.academic_id', '=', 'academics.id')
            ->select('personals.*', 'positions.name as position_name', 'academics.short_name as academic_name')
            ->first();

        $data['getAd8'] = DB::table('personals')
        ->where([
            ['major_position_id', 1],
            ['major_id','<>',9]
        ])
            ->join('major_positions', 'personals.major_position_id', '=', 'major_positions.id')
            ->join('academics', 'personals.academic_id', '=', 'academics.id')
            ->join('majors', 'personals.major_id', '=', 'majors.id')
            ->select('personals.*', 'major_positions.name as position_name', 'academics.short_name as academic_name', 'majors.short_name as major_name')
            ->get();

        $data['getAd9'] = DB::table('personals')
            ->where([
                ['major_position_id', 1],
                ['major_id','<>',9]
            ])

            ->join('major_positions', 'personals.major_position_id', '=', 'major_positions.id')
            ->join('academics', 'personals.academic_id', '=', 'academics.id')
            ->join('majors', 'personals.major_id', '=', 'majors.id')
            ->select('personals.*', 'major_positions.name as position_name', 'academics.short_name as academic_name', 'majors.short_name as major_name')
            ->get();

        return view('page.administrator', $data);
    }

    public function getPersonal($id)
    {
        $data['getPs1'] = DB::table('personals')
            ->where([
                ['major_position_id', '=', 1],
                ['major_id', '=', $id]
            ])
            ->join('major_positions', 'personals.major_position_id', '=', 'major_positions.id')
            ->join('academics', 'personals.academic_id', '=', 'academics.id')
            ->join('majors', 'personals.major_id', '=', 'majors.id')
            ->select('personals.*', 'major_positions.name as position_name', 'academics.short_name as academic_name', 'majors.name as major_name')
            ->first();

       /*  $data['getPs2'] = DB::table('personals')
            ->whereNull('major_position_id')
            ->where('major_id', $id)
            ->join('academics', 'personals.academic_id', '=', 'academics.id')
            ->select('personals.*', 'academics.short_name as academic_name')
            ->get(); */

        $data['getPs2'] = DB::table('personals')
            ->where([
                ['major_position_id', '=', 4],
                ['major_id', '=', $id]
            ])
            ->join('academics', 'personals.academic_id', '=', 'academics.id')
            ->select('personals.*', 'academics.short_name as academic_name')
            ->get();

        $data['getPs3'] = DB::table('personals')
            ->where([
                ['major_position_id', '=', 2],
                ['major_id', '=', $id]
            ])
            ->join('academics', 'personals.academic_id', '=', 'academics.id')
            ->select('personals.*', 'academics.short_name as academic_name')
            ->first();


        $data['getPs4'] = DB::table('personals')
            ->where([
                ['major_position_id', '=', 3],
                ['major_id', '=', $id]
            ])
            ->join('academics', 'personals.academic_id', '=', 'academics.id')
            ->select('personals.*', 'academics.short_name as academic_name')
            ->first();

        return view('page.personal', $data);
    }


    public function getStaff()
    {
        /*  $data['getSt1'] = DB::table('personals')
        ->where('position_status_id', 2)
        ->join('prefix_names', 'personals.prefix_name_id', '=', 'prefix_names.id')
        ->join('positions', 'personals.position_id', '=', 'positions.id')
        ->select('personals.*', 'positions.name as position_name', 'prefix_names.name as prefix_name')
        ->get(); */

        $data['getSt1'] = DB::table('personals')
            ->where([
                ['position_status_id', '=', '2'],
                ['personals.id', '=', '50']
            ])
            ->join('prefix_names', 'personals.prefix_name_id', '=', 'prefix_names.id')
            ->join('positions', 'personals.position_id', '=', 'positions.id')
            ->join('personals_departs', 'personals_departs.personal_id', '=', 'personals.id')
            ->join('departments', 'departments.id', '=', 'personals_departs.department_id')
            ->select('personals.*', 'positions.name as position_name', 'prefix_names.name as prefix_name', 'departments.name as department_name')
            ->first();

        $data['getSt2'] = DB::table('personals')
            ->where([
                ['position_status_id', '=', '2'],
                ['personals.id', '<>', '50'],
                ['personals_departs.department_id', '=', '1']
            ])
            ->join('prefix_names', 'personals.prefix_name_id', '=', 'prefix_names.id')
            ->join('positions', 'personals.position_id', '=', 'positions.id')
            ->join('personals_departs', 'personals_departs.personal_id', '=', 'personals.id')
            ->join('departments', 'departments.id', '=', 'personals_departs.department_id')
            ->select('personals.*', 'positions.name as position_name', 'prefix_names.name as prefix_name', 'departments.name as department_name')
            ->get();

        $data['getSt3'] = DB::table('personals')
            ->where([
                ['position_status_id', '=', '2'],
                ['personals_departs.department_id', '=', '2']
            ])
            ->join('prefix_names', 'personals.prefix_name_id', '=', 'prefix_names.id')
            ->join('positions', 'personals.position_id', '=', 'positions.id')
            ->join('personals_departs', 'personals_departs.personal_id', '=', 'personals.id')
            ->join('departments', 'departments.id', '=', 'personals_departs.department_id')
            ->select('personals.*', 'positions.name as position_name', 'prefix_names.name as prefix_name', 'departments.name as department_name')
            ->get();

        $data['getSt4'] = DB::table('personals')
            ->where([
                ['position_status_id', '=', '2'],
                ['personals_departs.department_id', '=', '3']
            ])
            ->join('prefix_names', 'personals.prefix_name_id', '=', 'prefix_names.id')
            ->join('positions', 'personals.position_id', '=', 'positions.id')
            ->join('personals_departs', 'personals_departs.personal_id', '=', 'personals.id')
            ->join('departments', 'departments.id', '=', 'personals_departs.department_id')
            ->select('personals.*', 'positions.name as position_name', 'prefix_names.name as prefix_name', 'departments.name as department_name')
            ->get();

        $data['getSt5'] = DB::table('personals')
            ->where([
                ['position_status_id', '=', '2'],
                ['personals_departs.department_id', '=', '4']
            ])
            ->join('prefix_names', 'personals.prefix_name_id', '=', 'prefix_names.id')
            ->join('positions', 'personals.position_id', '=', 'positions.id')
            ->join('personals_departs', 'personals_departs.personal_id', '=', 'personals.id')
            ->join('departments', 'departments.id', '=', 'personals_departs.department_id')
            ->select('personals.*', 'positions.name as position_name', 'prefix_names.name as prefix_name', 'departments.name as department_name')
            ->get();

        $data['getSt6'] = DB::table('personals')
            ->where([
                ['position_status_id', '=', '2'],
                ['personals_departs.department_id', '=', '5']
            ])
            ->join('prefix_names', 'personals.prefix_name_id', '=', 'prefix_names.id')
            ->join('positions', 'personals.position_id', '=', 'positions.id')
            ->join('personals_departs', 'personals_departs.personal_id', '=', 'personals.id')
            ->join('departments', 'departments.id', '=', 'personals_departs.department_id')
            ->select('personals.*', 'positions.name as position_name', 'prefix_names.name as prefix_name', 'departments.name as department_name')
            ->get();

        return view('page.staff', $data);
    }

    public function getPromote($slug)
    {
        $data['page'] = Page::where('slug', $slug)->first();
        return view('page.promote', $data);
    }
}
