<?php



namespace Jkpeyi\Findhelper;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class FindHelper
{
    public static function findById(Model $model, $id)
    {
        try {
            $obj = $model->findOrFail($id);
            return $obj;
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => $e->getModel() .' not found'], 404);

        }
    }
}
