<?php namespace App\Repositories\Eloquent;

use \App\Repositories\ChannelRepositoryInterface;
use \App\Models\Channel;

/**
 *
 * @method \App\Models\Channel[] getEmptyList()
 * @method \App\Models\Channel[]|\Traversable|array all($order = null, $direction = null)
 * @method \App\Models\Channel[]|\Traversable|array get($order, $direction, $offset, $limit)
 * @method \App\Models\Channel create($value)
 * @method \App\Models\Channel find($id)
 * @method \App\Models\Channel[]|\Traversable|array allByIds($ids, $order = null, $direction = null, $reorder = false)
 * @method \App\Models\Channel[]|\Traversable|array getByIds($ids, $order = null, $direction = null, $offset = null, $limit = null);
 * @method \App\Models\Channel update($model, $input)
 * @method \App\Models\Channel save($model);
 */

class ChannelRepository extends SingleKeyModelRepository implements ChannelRepositoryInterface
{

    public function getBlankModel()
    {
        return new Channel();
    }

    public function rules()
    {
        return [
        ];
    }

    public function messages()
    {
        return [
        ];
    }

}
