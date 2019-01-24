<?php
/**
 * @filesource modules/index/models/province.php
 *
 * @copyright 2016 Goragod.com
 * @license http://www.kotchasan.com/license/
 *
 * @see http://www.kotchasan.com/
 */

namespace Index\Province;

use Kotchasan\Http\Request;

/**
 * จังหวัดด้วย Ajax.
 *
 * @author Goragod Wiriya <admin@goragod.com>
 *
 * @since 1.0
 */
class Model extends \Kotchasan\Model
{

  /**
   * คืนค่ารายชื่อจังหวัด.
   *
   * @param Request $request
   *
   * @return JSON
   */
  public function toJSON(Request $request)
  {
    // referer, ajax
    if ($request->isReferer() && $request->isAjax()) {
      echo json_encode(array(
        'provinceID' => \Kotchasan\Province::all($request->post('country')->filter('A-Z')),
      ));
    }
  }
}