<?php

namespace App\component;

class Recute
{
    private $data;
    private $Htmlopect;
    public function __construct($data)
    {
        $this->data = $data;
    }

    public function returnselecte($parent_Id, $id = 0, $text = '')
    {
        foreach ($this->data as $value) {
            if ($value['parent_id'] == $id) {
                if (!empty($parent_Id) && $parent_Id == $value['id']) {

                    $this->Htmlopect .= "<option selected value ='" . $value['id'] . "'>" . $text . $value['tennhomkiemke'] . '</option>';
                } else
                    $this->Htmlopect .= '<option  value =' . $value['id'] . '>' . $text . $value['tennhomkiemke'] . '</option>';

                $this->returnselecte($parent_Id, $value['id'], text: $text . '-');
            }
        }
        return $this->Htmlopect;
    }

    public function returnlophoc($parent_Id, $id = 0, $text = '')
    {
        foreach ($this->data as $value) {
            if ($value['parent_id'] == $id) {
                if (!empty($parent_Id) && $parent_Id == $value['id']) {

                    $this->Htmlopect .= "<option selected value ='" . $value['id'] . "'>" . $text . $value['tennhomkiemke'] . '</option>';
                } else
                    $this->Htmlopect .= '<option  value =' . $value['id'] . '>' . $text . $value['tennhomkiemke'] . '</option>';

                $this->returnselecte($parent_Id, $value['id'], text: $text . '-');
            }
        }
        return $this->Htmlopect;
    }
    public function cahoc($parent_Id, $id = 0, $text = '')
    {
        foreach ($this->data as $value) {
            if ($value['parent_id'] == $id) {
                if (!empty($parent_Id) && $parent_Id == $value['id']) {

                    $this->Htmlopect .= "<option selected value ='" . $value['id'] . "'>" . $text . $value['tennhomkiemke'] . '</option>';
                } else
                    $this->Htmlopect .= '<option  value =' . $value['id'] . '>' . $text . $value['tennhomkiemke'] . '</option>';

                $this->returnselecte($parent_Id, $value['id'], text: $text . '-');
            }
        }
        return $this->Htmlopect;
    }
    public function retunrphonghoc($parent_Id, $id = 0, $text = '')
    {
        foreach ($this->data as $value) {
            if ($value['parent_id'] == $id) {
                if (!empty($parent_Id) && $parent_Id == $value['id']) {

                    $this->Htmlopect .= "<option selected value ='" . $value['id'] . "'>" . $text . $value['tennhomkiemke'] . '</option>';
                } else
                    $this->Htmlopect .= '<option  value =' . $value['id'] . '>' . $text . $value['tennhomkiemke'] . '</option>';

                $this->returnselecte($parent_Id, $value['id'], text: $text . '-');
            }
        }
        return $this->Htmlopect;
    }
    public function retunruser($parent_Id, $id = 0, $text = '')
    {
        foreach ($this->data as $value) {
            if ($value['parent_id'] == $id) {
                if (!empty($parent_Id) && $parent_Id == $value['id']) {

                    $this->Htmlopect .= "<option selected value ='" . $value['id'] . "'>" . $text . $value['tennhomkiemke'] . '</option>';
                } else
                    $this->Htmlopect .= '<option  value =' . $value['id'] . '>' . $text . $value['tennhomkiemke'] . '</option>';

                $this->returnselecte($parent_Id, $value['id'], text: $text . '-');
            }
        }
        return $this->Htmlopect;
    }
    public function returnmaytinh($parent_Id, $id = 0, $text = '')
    {
        foreach ($this->data as $value) {
            if ($value['parent_id'] == $id) {
                if (!empty($parent_Id) && $parent_Id == $value['id']) {

                    $this->Htmlopect .= "<option selected value ='" . $value['id'] . "'>" . $text . $value['tennhomkiemke'] . '</option>';
                } else
                    $this->Htmlopect .= '<option  value =' . $value['id'] . '>' . $text . $value['tennhomkiemke'] . '</option>';

                $this->returnselecte($parent_Id, $value['id'], text: $text . '-');
            }
        }
        return $this->Htmlopect;
    }
}