<?php

/* _booking_step1_table_show_taxi.html */
class __TwigTemplate_f21bad0ae11ef05ff8fcb4f983ae7f8396dbe8f6753d7e159db4f15d2d5ae016 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<td>
                                    <p>AirportTaxi</p>
                                    <p class=\"addition_text\">Chi tiết</p>
                                </td>
                                <td>
                                    <p>Taxi 4 chỗ</p>
                                    <p class=\"addition_text\">Hình ảnh</p>
                                </td>
                                <td>
                                    *****
                                </td>
                                <td>
                                    Khách
                                </td>
                                <td>
                                    150.000 VNĐ
                                </td>
                                <td>
                                    150.000 VNĐ
                                </td>
                                <td>
                                    <div class=\"radio book\">
                                        <label for=\"book_noncheck_1\">
                                            <input type=\"radio\" name=\"chonxe\" value=\"option1\" id=\"book_noncheck_1\" checked><span class=\"book_noncheck\">Chọn</span>
                                        </label>
                                    </div>
                                </td>";
    }

    public function getTemplateName()
    {
        return "_booking_step1_table_show_taxi.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
