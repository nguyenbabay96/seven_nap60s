<?php
namespace App\Helpers;
class BPaging
{
    public $limit;
    public $page;
    public $offset;

    /***
     * @param $param array
     * @param int $default_limit
     * @return BPaging
     */
    public function __construct($param, $default_limit = 30)
    {
        $bpaging = new BPaging();
        $bpaging->limit = !empty($param['limit'])?$param['limit']:$default_limit;
        $bpaging->page = (!empty($param['page']) && $param['page'] != 'null' )?$param['page']:1;
        $bpaging->offset = ($bpaging->page - 1) * $bpaging->limit;
        return $bpaging;
    }

    public static function paginateView($rows)
    {
        $rows['first'] = 1;
        if($rows['current_page'] >= 1){
            $rows['before'] = $rows['current_page'] - 1;
            if($rows['current_page'] < $rows['total']){
                $rows['next'] = $rows['current_page'] +1;
            }else{
                $rows['next'] = $rows['current_page'];
            }
        }else{
            $rows['before'] = 1;
            $rows['next'] = 0;
        }

        $rows['last'] = $rows['total'];
        if ($rows['total'] <= 6) {
            $rows['min_views'] = 1;
            if ($rows['total'] > 6) {
                $rows['max_views'] = 6;
            } else {
                $rows['max_views'] = $rows['total'];
            }
        } else {
            if ($rows['current_page'] >= 6 && $rows['from'] < $rows['total'] - 3) {
                $rows['min_views'] = $rows['current_page'] - 3;
                $rows['max_views'] = $rows['current_page'] + 3;
            } elseif ($rows['current_page'] >= 6 && $rows['from'] >= $rows['total'] - 3) {
                $rows['min_views']= $rows['current_page'] - 3;
                $rows['max_views'] = $rows['total_items'];
            } else {
                $rows['min_views'] = 1;
                $rows['max_views'] = 6;
            }
        }
        return $rows;
    }
}