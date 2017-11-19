<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\BaseRequest;
use App\Http\Controllers\Controller;
use App\Repositories\ChannelRepositoryInterface;
use App\Http\Requests\PaginationRequest;

class ChannelController extends Controller
{
    /** @var \App\Repositories\ChannelRepositoryInterface */
    protected $channelRepository;

    public function __construct(
        ChannelRepositoryInterface $channelRepository
    ) {
        $this->channelRepository = $channelRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @param \App\Http\Requests\PaginationRequest $request
     *
     * @return \Response
     */
    public function index(PaginationRequest $request)
    {
        $offset = $request->offset();
        $limit = $request->limit();
        $count = $this->channelRepository->count();
        $models = $this->channelRepository->get('id', 'desc', $offset, $limit);

        return view('pages.admin.channels.index', [
            'models' => $models,
            'count' => $count,
            'offset' => $offset,
            'limit' => $limit,
            'baseUrl' => action('Admin\ChannelController@index'),
        ]);
    }

}