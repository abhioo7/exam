<?php
namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use App\criteria;
use App\info;
class CriteriaController extends Controller
{
  public function store(Request $request)
  {
    $criteria = new criteria;
    $organisationId = Input::get('organisation_select');
    $streamId = Input::get('stream_select');
    $modeId = Input::get('mode_select');
    $location = DB::table('info')->where('organisation', $organisationId)->value('location');
    $organisation = DB::table('info')->where('organisation', $organisationId);
    $stream =DB::table('info')->where('organisation', $organisationId)->value('stream');
    $mode =DB::table('info')->where('organisation', $organisationId)->value('mode');
    $sel =DB::table('info')->where('organisation', $organisationId)->value('SelectionProcedure');
    $tech =DB::table('info')->where('organisation', $organisationId)->value('TechnicalInterview');
    $analytics =DB::table('info')->where('organisation', $organisationId)->value('AnalyticalQuestions');
    $hr =DB::table('info')->where('organisation', $organisationId)->value('HRQuestions');
    $suggest =DB::table('info')->where('organisation', $organisationId)->value('Suggestions');
    return view('welcome')->withOrg('org',$organisation)->withStream('stream',$stream)->withMode('mode'$mode)->with('LOC',$location)->with('sel',$sel)->with('tech',$tech)->with('analy',$analytics)->with('hr',$hr)->with('sugg',$suggest);
    }
  }
