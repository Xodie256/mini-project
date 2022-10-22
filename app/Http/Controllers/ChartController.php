<?php
namespace App\Http\Controllers;
use App\Models\Chart;
use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ChartController extends Controller
{
    public function reports(Request $request)
    {
        $col = $request->input('col');
        $id = $request->input('id');

        $groups = DB::table('forms')->where('unit_id',$id)
            ->select($col, DB::raw('count(*) as total'))
            ->groupBy($col)
            ->pluck('total',$col)->all();
        // Generate random colours for the groups
        for ($i = 0; $i <= count($groups); $i++) {
            $colours[] = '#' . substr(str_shuffle('ABCDEF0123456789'), 0, 6);
        }
        // Prepare the data for returning with the view
        $chart = new Chart;
        $chart->labels = (array_keys($groups));
        $chart->dataset = (array_values($groups));
        $chart->colours = $colours;
        return view('administrators.Reports.generate', compact('chart'));
    }

    public function getreport(){
        return view('administrators.Reports.select')
        ->with('formdata',Form::orderBy('updated_at','DESC')->get());
    }
}