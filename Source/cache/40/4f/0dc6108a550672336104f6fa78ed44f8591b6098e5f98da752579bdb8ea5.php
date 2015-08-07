<?php

/* _booking_step1_table.html */
class __TwigTemplate_404f0dc6108a550672336104f6fa78ed44f8591b6098e5f98da752579bdb8ea5 extends Twig_Template
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
        echo "<table class=\"table table-hover showxe\">
                            <thead>
                            <tr>
                                <th>
                                    <div class=\"btn-group\">
                                        <button type=\"button\" class=\"btn btn_filter dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">Hãng <span class=\"caret\"></span></button>
                                        <ul class=\"dropdown-menu\" role=\"menu\">
                                            <li><a href=\"\">Action</a></li>
                                            <li><a href=\"\">Another action</a></li>
                                            <li><a href=\"\">Something else here</a></li>
                                        </ul>
                                    </div>
                                </th>
                                <th>
                                    <div class=\"btn-group\">
                                        <button type=\"button\" class=\"btn btn_filter dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">Loại xe <span class=\"caret\"></span></button>
                                        <ul class=\"dropdown-menu\" role=\"menu\">
                                            <li><a href=\"\">Action</a></li>
                                            <li><a href=\"\">Another action</a></li>
                                            <li><a href=\"\">Something else here</a></li>
                                        </ul>
                                    </div>
                                </th>
                                <th>
                                    <div class=\"btn-group\">
                                        <button type=\"button\" class=\"btn btn_filter dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">Đánh giá <span class=\"caret\"></span></button>
                                        <ul class=\"dropdown-menu\" role=\"menu\">
                                            <li><a href=\"\">Action</a></li>
                                            <li><a href=\"\">Another action</a></li>
                                            <li><a href=\"\">Something else here</a></li>
                                        </ul>
                                    </div>
                                </th>
                                <th>
                                    <span>Số lượng</span>
                                    <div class=\"btn-group\">
                                        <button type=\"button\" class=\"btn btn_filter dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">1 <span class=\"caret\"></span></button>
                                        <ul class=\"dropdown-menu\" role=\"menu\">
                                            <li><a href=\"\">Action</a></li>
                                            <li><a href=\"\">Another action</a></li>
                                            <li><a href=\"\">Something else here</a></li>
                                        </ul>
                                    </div>
                                    <span class=\"hightlight\">(?)</span>
                                </th>
                                <th>
                                    <div class=\"btn-group\">
                                        <button type=\"button\" class=\"btn btn_filter dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">Đơn giá <span class=\"caret\"></span></button>
                                        <ul class=\"dropdown-menu\" role=\"menu\">
                                            <li><a href=\"\">Action</a></li>
                                            <li><a href=\"\">Another action</a></li>
                                            <li><a href=\"\">Something else here</a></li>
                                        </ul>
                                    </div>
                                </th>
                                <th>
                                    <div class=\"btn-group\">
                                        <button type=\"button\" class=\"btn btn_filter dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">Thành tiền <span class=\"caret\"></span></button>
                                        <ul class=\"dropdown-menu\" role=\"menu\">
                                            <li><a href=\"\">Action</a></li>
                                            <li><a href=\"\">Another action</a></li>
                                            <li><a href=\"\">Something else here</a></li>
                                        </ul>
                                    </div>
                                </th>
                                <th width=\"70px\"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                ";
        // line 71
        $this->env->loadTemplate("_booking_step1_table_show_taxi.html")->display($context);
        // line 72
        echo "                            </tr>
                            <tr>
                                ";
        // line 74
        $this->env->loadTemplate("_booking_step1_table_show_taxi.html")->display($context);
        // line 75
        echo "                            </tr>
                            </tbody>
                        </table>";
    }

    public function getTemplateName()
    {
        return "_booking_step1_table.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 75,  97 => 74,  93 => 72,  91 => 71,  19 => 1,);
    }
}
