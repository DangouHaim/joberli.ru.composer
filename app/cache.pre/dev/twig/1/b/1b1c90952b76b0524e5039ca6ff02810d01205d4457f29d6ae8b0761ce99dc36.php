<?php

/* IphpFileStoreBundle:Form:fields.html.twig */
class __TwigTemplate_1986c5d27fb837467ff404733aff62f086d7c46dbd3089113669003c74f6d125 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'iphp_file_widget' => array($this, 'block_iphp_file_widget'),
            'iphp_file_info' => array($this, 'block_iphp_file_info'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('iphp_file_widget', $context, $blocks);
    }

    public function block_iphp_file_widget($context, array $blocks = array())
    {
        // line 2
        echo "

    <div ";
        // line 4
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">

        ";
        // line 6
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "file", array(), "any", true, true)) {
            // line 7
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget');
            echo "
        ";
        }
        // line 9
        echo "
        ";
        // line 11
        echo "        ";
        if (((isset($context["file_data"]) ? $context["file_data"] : $this->getContext($context, "file_data")) && $this->getAttribute((isset($context["file_data"]) ? $context["file_data"] : null), "originalName", array(), "any", true, true))) {
            // line 12
            echo "            ";
            $context["fileUrl"] = $this->getAttribute((isset($context["file_data"]) ? $context["file_data"] : $this->getContext($context, "file_data")), "path", array());
            // line 13
            echo "            ";
            // line 14
            echo "


            ";
            // line 17
            $this->displayBlock('iphp_file_info', $context, $blocks);
            // line 53
            echo "

        ";
        }
        // line 56
        echo "
    </div>


";
    }

    // line 17
    public function block_iphp_file_info($context, array $blocks = array())
    {
        // line 18
        echo "            <table>
                <tr>

                    ";
        // line 21
        if ((isset($context["show_preview"]) ? $context["show_preview"] : $this->getContext($context, "show_preview"))) {
            // line 22
            echo "                        ";
            if ($this->getAttribute((isset($context["file_data"]) ? $context["file_data"] : null), "width", array(), "any", true, true)) {
                // line 23
                echo "                            <td><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["fileUrl"]) ? $context["fileUrl"] : $this->getContext($context, "fileUrl")), "html", null, true);
                echo "\" target=\"_blank\" class=\"full-img-link\"><img
                                            src=\"";
                // line 24
                echo twig_escape_filter($this->env, (isset($context["fileUrl"]) ? $context["fileUrl"] : $this->getContext($context, "fileUrl")), "html", null, true);
                echo "\"
                                            width=\"";
                // line 25
                echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["file_data"]) ? $context["file_data"] : $this->getContext($context, "file_data")), "width", array()) > 200)) ? (200) : ($this->getAttribute((isset($context["file_data"]) ? $context["file_data"] : $this->getContext($context, "file_data")), "width", array()))), "html", null, true);
                echo "\" border=\"0\"></a>
                            </td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                        ";
            }
            // line 29
            echo "                    ";
        }
        // line 30
        echo "
                    <td style=\"vertical-align: top;\">

                        <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["fileUrl"]) ? $context["fileUrl"] : $this->getContext($context, "fileUrl")), "html", null, true);
        echo "\" target=\"_blank\" class=\"full-img-link\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["file_data"]) ? $context["file_data"] : $this->getContext($context, "file_data")), "fileName", array()), "html", null, true);
        echo "</a>
                        <br>";
        // line 34
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["file_data"]) ? $context["file_data"] : $this->getContext($context, "file_data")), "size", array()) / 1000), "html", null, true);
        echo " Kb
                        ";
        // line 35
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["file_data"]) ? $context["file_data"] : null), "width", array(), "any", true, true)) ? ((((", " . $this->getAttribute((isset($context["file_data"]) ? $context["file_data"] : $this->getContext($context, "file_data")), "width", array())) . "x") . $this->getAttribute((isset($context["file_data"]) ? $context["file_data"] : $this->getContext($context, "file_data")), "height", array()))) : ("")), "html", null, true);
        echo "

                        ";
        // line 37
        if (($this->getAttribute((isset($context["file_data"]) ? $context["file_data"] : $this->getContext($context, "file_data")), "originalName", array()) != $this->getAttribute((isset($context["file_data"]) ? $context["file_data"] : $this->getContext($context, "file_data")), "fileName", array()))) {
            // line 38
            echo "                            <br>";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Original file name", array(), "messages");
            echo ": <b>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["file_data"]) ? $context["file_data"] : $this->getContext($context, "file_data")), "originalName", array()), "html", null, true);
            echo "</b>
                        ";
        }
        // line 40
        echo "


                        ";
        // line 43
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "delete", array(), "any", true, true)) {
            // line 44
            echo "                            <br><br>
                            ";
            // line 45
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delete", array()), 'row', array("label_attr" => array("style" => "width:auto;padding-right:10px")));
            echo "
                        ";
        }
        // line 47
        echo "
                    </td>

                </tr>
            </table>
            ";
    }

    public function getTemplateName()
    {
        return "IphpFileStoreBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  152 => 47,  147 => 45,  144 => 44,  142 => 43,  137 => 40,  129 => 38,  127 => 37,  122 => 35,  118 => 34,  112 => 33,  107 => 30,  104 => 29,  97 => 25,  93 => 24,  88 => 23,  85 => 22,  83 => 21,  78 => 18,  75 => 17,  67 => 56,  62 => 53,  60 => 17,  55 => 14,  53 => 13,  50 => 12,  47 => 11,  44 => 9,  38 => 7,  36 => 6,  31 => 4,  27 => 2,  21 => 1,);
    }
}
/* {% block iphp_file_widget %}*/
/* */
/* */
/*     <div {{ block('widget_container_attributes') }}>*/
/* */
/*         {% if form.file is defined %}*/
/*             {{ form_widget(form.file) }}*/
/*         {% endif %}*/
/* */
/*         {# if was upload error value is uploadedFile and originalName no exists#}*/
/*         {% if file_data and  file_data.originalName is defined %}*/
/*             {% set fileUrl =   file_data.path %}*/
/*             {# |url_encode() #}*/
/* */
/* */
/* */
/*             {%  block iphp_file_info  %}*/
/*             <table>*/
/*                 <tr>*/
/* */
/*                     {% if show_preview %}*/
/*                         {% if file_data.width is defined %}*/
/*                             <td><a href="{{ fileUrl }}" target="_blank" class="full-img-link"><img*/
/*                                             src="{{ fileUrl }}"*/
/*                                             width="{{  file_data .width > 200 ? 200 :  file_data.width }}" border="0"></a>*/
/*                             </td>*/
/*                             <td>&nbsp;&nbsp;&nbsp;</td>*/
/*                         {% endif %}*/
/*                     {% endif %}*/
/* */
/*                     <td style="vertical-align: top;">*/
/* */
/*                         <a href="{{ fileUrl }}" target="_blank" class="full-img-link">{{ file_data.fileName }}</a>*/
/*                         <br>{{ file_data.size /1000 }} Kb*/
/*                         {{ file_data.width is defined ? ', ' ~ file_data.width ~ 'x' ~ file_data.height : "" }}*/
/* */
/*                         {% if file_data.originalName !=  file_data.fileName %}*/
/*                             <br>{% trans %}Original file name{% endtrans %}: <b>{{ file_data.originalName }}</b>*/
/*                         {% endif %}*/
/* */
/* */
/* */
/*                         {% if form.delete is defined %}*/
/*                             <br><br>*/
/*                             {{ form_row (form.delete, {'label_attr' : { 'style' :'width:auto;padding-right:10px' }})}}*/
/*                         {% endif %}*/
/* */
/*                     </td>*/
/* */
/*                 </tr>*/
/*             </table>*/
/*             {%  endblock iphp_file_info  %}*/
/* */
/* */
/*         {% endif %}*/
/* */
/*     </div>*/
/* */
/* */
/* {% endblock iphp_file_widget %}*/
