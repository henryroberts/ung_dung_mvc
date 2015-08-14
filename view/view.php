<?php
/**
 * Created by PhpStorm.
 * User: Anh Đức
 * Date: 14/8/2015
 * Time: 8:09 PM
 */
class view {
    public function viewMayTinh1() {
        $tpl = "";
        $tpl .= '<form method="post">
    <label>Số thứ nhất</label><input type="text" name="st1" />
    <select name="pt">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="x">x</option>
        <option value=":">:</option>
    </select>
    <label>Số thứ hai</label><input type="text" name="st2" />
    <button type="submit" name="submit">Tính</button>
</form>';
        return $tpl;
    }
    public function viewMayTinh2($kq) {
        $tpl = "";
        $tpl .= '<form method="post">
    <label>Số thứ nhất</label><input type="text" name="st1" />
    <select name="pt">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="x">x</option>
        <option value=":">:</option>
    </select>
    <label>Số thứ 2</label><input type="text" name="st2" />
    <button type="submit" name="submit">Tính</button>
</form>';
        $tpl .= '<hr />';
        $tpl .= $kq;
        return $tpl;
    }

}