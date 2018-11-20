<?php

namespace App\Repositories\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;
use App\Models\{Action, Activity};

/**
 * Class UserRepository.
 */
class ActivityRepository extends BaseRepository
{

    /**
     * @return string
     */
    public function model()
    {
        return Activity::class;
    }


    public function pharmacy_view($data, Request $request, $location, $reference = null)
    {
        $action = Action::where('name', 'view')->first();
        foreach ($data as $i => $item) {
            Activity::create([
                'user_id'        => auth()->user()->id ?? null,
                'session_id'     => session()->getId(),
                'action_id'      => $action->id, // view
                'model_name'     => 'Branch',
                'model_id'       => $item->id,
                'mims_reference' => $reference,
                'keyword'        => $request->keyword,
                'ip'             => $request->ip(),
                'location'       => $location,
                'device'         => 'web',
                'date'           => date('Y-m-d')
            ]);
        }
    }

    public function medicine_view(Request $request, $location, $reference = null)
    {
        $action = Action::where('name', 'view')->first();
        Activity::create([
            'user_id'        => auth()->user()->id ?? null,
            'session_id'     => session()->getId(),
            'action_id'      => $action->id, // view,
            'model_name'     => 'Search',
            'mims_reference' => $reference,
            'keyword'        => $request->keyword,
            'ip'             => $request->ip(),
            'location'       => $location,
            'device'         => 'web',
            'date'           => date('Y-m-d')
        ]);
    }

    public function pharmacy_click($branch_id, Request $request, $location, $reference = null)
    {
        $action = Action::where('name', 'click')->first();
        Activity::create([
            'user_id'        => auth()->user()->id ?? null,
            'session_id'     => session()->getId(),
            'action_id'      => $action->id, // click
            'model_name'     => 'Branch',
            'model_id'       => $branch_id,
            'mims_reference' => $reference,
            'keyword'        => $request->keyword,
            'ip'             => $request->ip(),
            'location'       => $location,
            'device'         => 'web',
            'date'           => date('Y-m-d')
        ]);
    }

    public function product_click($product, Request $request, $location, $reference = null)
    {
        $action = Action::where('name', 'click')->first();
        Activity::create([
            'user_id'        => auth()->user()->id ?? null,
            'session_id'     => session()->getId(),
            'action_id'      => $action->id, // click
            'model_name'     => 'Inventory',
            'model_id'       => $product->id,
            'mims_reference' => $reference,
            'keyword'        => $product->product,
            'ip'             => $request->ip(),
            'location'       => $location,
            'device'         => 'web',
            'date'           => date('Y-m-d')
        ]);
    }
}
