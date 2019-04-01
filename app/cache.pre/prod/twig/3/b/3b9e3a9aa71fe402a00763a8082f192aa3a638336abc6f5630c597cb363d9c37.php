<?php

/* MessageBundle:Message:threads_list.html.twig */
class __TwigTemplate_e808c0a179f0b72de64731e9a8c5b1491ded07e6b677396b277a97663422c6f6 extends Twig_Template
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
        echo "<table class=\"table table-striped table-advance table-hover\">

    <thead>
        <tr>
            <th>";
        // line 5
        echo $this->env->getExtension('translator')->getTranslator()->trans("subject", array(), "FOSMessageBundle");
        echo "</th>
            <th>";
        // line 6
        echo $this->env->getExtension('translator')->getTranslator()->trans("starter", array(), "FOSMessageBundle");
        echo "</th>
            <th>";
        // line 7
        echo $this->env->getExtension('translator')->getTranslator()->trans("startdate", array(), "FOSMessageBundle");
        echo "</th>
            <th>";
        // line 8
        echo $this->env->getExtension('translator')->getTranslator()->trans("messages", array(), "FOSMessageBundle");
        echo "</th>
            <th>";
        // line 9
        echo $this->env->getExtension('translator')->getTranslator()->trans("last_message", array(), "FOSMessageBundle");
        echo "</th>
            <th>";
        // line 10
        echo $this->env->getExtension('translator')->getTranslator()->trans("actions", array(), "FOSMessageBundle");
        echo "</th>
        </tr>
    </thead>

    <tbody>

    ";
        // line 16
        if ((isset($context["threads"]) ? $context["threads"] : null)) {
            // line 17
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["threads"]) ? $context["threads"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["thread"]) {
                // line 18
                echo "            <tr>
                <td>
                    <a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("fos_message_thread_view", array("threadId" => $this->getAttribute($context["thread"], "id", array()))), "html", null, true);
                echo "#message_";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["thread"], "lastMessage", array()), "id", array()), "html", null, true);
                echo "\">
                        ";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["thread"], "subject", array()), "html", null, true);
                echo "
                    </a>

                    ";
                // line 24
                if ( !$this->env->getExtension('fos_message')->isRead($context["thread"])) {
                    // line 25
                    echo "                        (";
                    echo $this->env->getExtension('translator')->getTranslator()->trans("new", array(), "FOSMessageBundle");
                    echo ")
                    ";
                }
                // line 27
                echo "                </td>
                <td>
                    ";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["thread"], "createdBy", array()), "html", null, true);
                echo "
                </td>
                <td>
                    ";
                // line 32
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["thread"], "createdAt", array())), "html", null, true);
                echo "
                </td>
                <td>
                    ";
                // line 35
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["thread"], "messages", array())), "html", null, true);
                echo "
                </td>
                <td>
                    ";
                // line 38
                if ($this->getAttribute($context["thread"], "lastMessage", array())) {
                    // line 39
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("fos_message_thread_view", array("threadId" => $this->getAttribute($context["thread"], "id", array()))), "html", null, true);
                    echo "#message_";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["thread"], "lastMessage", array()), "id", array()), "html", null, true);
                    echo "\" title=\"";
                    echo $this->env->getExtension('translator')->getTranslator()->trans("goto_last", array(), "FOSMessageBundle");
                    echo "\">
                            →
                        </a>
                        ";
                    // line 42
                    echo $this->env->getExtension('translator')->getTranslator()->trans("on", array("%date%" => twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["thread"], "lastMessage", array()), "createdAt", array()))), "FOSMessageBundle");
                    // line 43
                    echo "                        <br />
                        ";
                    // line 44
                    echo $this->env->getExtension('translator')->getTranslator()->trans("by", array("%sender%" => twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["thread"], "lastMessage", array()), "sender", array()))), "FOSMessageBundle");
                    // line 45
                    echo "                    ";
                } else {
                    // line 46
                    echo "                        ----
                    ";
                }
                // line 48
                echo "                </td>
                <td>
                    ";
                // line 50
                if ($this->env->getExtension('fos_message')->canDeleteThread($context["thread"])) {
                    // line 51
                    echo "                        ";
                    if ($this->env->getExtension('fos_message')->isThreadDeletedByParticipant($context["thread"])) {
                        // line 52
                        echo "                            ";
                        ob_start();
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("fos_message_thread_undelete", array("threadId" => $this->getAttribute($context["thread"], "id", array()))), "html", null, true);
                        $context["formAction"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                        // line 53
                        echo "                            ";
                        ob_start();
                        echo $this->env->getExtension('translator')->getTranslator()->trans("undelete", array(), "FOSMessageBundle");
                        $context["submitValue"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                        // line 54
                        echo "                        ";
                    } else {
                        // line 55
                        echo "                            ";
                        ob_start();
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("fos_message_thread_delete", array("threadId" => $this->getAttribute($context["thread"], "id", array()))), "html", null, true);
                        $context["formAction"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                        // line 56
                        echo "                            ";
                        ob_start();
                        echo $this->env->getExtension('translator')->getTranslator()->trans("delete", array(), "FOSMessageBundle");
                        $context["submitValue"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                        // line 57
                        echo "                        ";
                    }
                    // line 58
                    echo "                        <form action=\"";
                    echo twig_escape_filter($this->env, (isset($context["formAction"]) ? $context["formAction"] : null), "html", null, true);
                    echo "\" method=\"post\">
                                <button class=\"btn btn-xs btn-default\" type=\"submit\"><i class=\"fa fa-trash\"></i></button>
                        </form>
                    ";
                }
                // line 62
                echo "                </td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thread'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "    ";
        } else {
            // line 66
            echo "        <tr>
            <td colspan=\"6\">
                ";
            // line 68
            echo $this->env->getExtension('translator')->getTranslator()->trans("no_thread", array(), "FOSMessageBundle");
            echo ".
            </td>
        </tr>
    ";
        }
        // line 72
        echo "
    </tbody>

</table>
";
    }

    public function getTemplateName()
    {
        return "MessageBundle:Message:threads_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 72,  192 => 68,  188 => 66,  185 => 65,  177 => 62,  169 => 58,  166 => 57,  161 => 56,  156 => 55,  153 => 54,  148 => 53,  143 => 52,  140 => 51,  138 => 50,  134 => 48,  130 => 46,  127 => 45,  125 => 44,  122 => 43,  120 => 42,  109 => 39,  107 => 38,  101 => 35,  95 => 32,  89 => 29,  85 => 27,  79 => 25,  77 => 24,  71 => 21,  65 => 20,  61 => 18,  56 => 17,  54 => 16,  45 => 10,  41 => 9,  37 => 8,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }
}
/* <table class="table table-striped table-advance table-hover">*/
/* */
/*     <thead>*/
/*         <tr>*/
/*             <th>{% trans from 'FOSMessageBundle' %}subject{% endtrans %}</th>*/
/*             <th>{% trans from 'FOSMessageBundle' %}starter{% endtrans %}</th>*/
/*             <th>{% trans from 'FOSMessageBundle' %}startdate{% endtrans %}</th>*/
/*             <th>{% trans from 'FOSMessageBundle' %}messages{% endtrans %}</th>*/
/*             <th>{% trans from 'FOSMessageBundle' %}last_message{% endtrans %}</th>*/
/*             <th>{% trans from 'FOSMessageBundle' %}actions{% endtrans %}</th>*/
/*         </tr>*/
/*     </thead>*/
/* */
/*     <tbody>*/
/* */
/*     {% if threads %}*/
/*         {% for thread in threads %}*/
/*             <tr>*/
/*                 <td>*/
/*                     <a href="{{ url('fos_message_thread_view', {'threadId': thread.id}) }}#message_{{ thread.lastMessage.id }}">*/
/*                         {{ thread.subject }}*/
/*                     </a>*/
/* */
/*                     {% if not fos_message_is_read(thread) %}*/
/*                         ({% trans from 'FOSMessageBundle' %}new{% endtrans %})*/
/*                     {% endif %}*/
/*                 </td>*/
/*                 <td>*/
/*                     {{ thread.createdBy }}*/
/*                 </td>*/
/*                 <td>*/
/*                     {{ thread.createdAt|date }}*/
/*                 </td>*/
/*                 <td>*/
/*                     {{ thread.messages|length }}*/
/*                 </td>*/
/*                 <td>*/
/*                     {% if thread.lastMessage %}*/
/*                         <a href="{{ url('fos_message_thread_view', {'threadId': thread.id}) }}#message_{{ thread.lastMessage.id }}" title="{% trans from 'FOSMessageBundle' %}goto_last{% endtrans %}">*/
/*                             →*/
/*                         </a>*/
/*                         {% trans with {'%date%': thread.lastMessage.createdAt|date} from 'FOSMessageBundle' %}on{% endtrans %}*/
/*                         <br />*/
/*                         {% trans with {'%sender%': thread.lastMessage.sender|e } from 'FOSMessageBundle' %}by{% endtrans %}*/
/*                     {% else %}*/
/*                         ----*/
/*                     {% endif %}*/
/*                 </td>*/
/*                 <td>*/
/*                     {% if fos_message_can_delete_thread(thread) %}*/
/*                         {% if fos_message_deleted_by_participant(thread) %}*/
/*                             {% set formAction %}{{ url('fos_message_thread_undelete', {'threadId': thread.id}) }}{% endset %}*/
/*                             {% set submitValue %}{% trans from 'FOSMessageBundle' %}undelete{% endtrans %}{% endset %}*/
/*                         {% else %}*/
/*                             {% set formAction %}{{ url('fos_message_thread_delete', {'threadId': thread.id}) }}{% endset %}*/
/*                             {% set submitValue %}{% trans from 'FOSMessageBundle' %}delete{% endtrans %}{% endset %}*/
/*                         {% endif %}*/
/*                         <form action="{{ formAction }}" method="post">*/
/*                                 <button class="btn btn-xs btn-default" type="submit"><i class="fa fa-trash"></i></button>*/
/*                         </form>*/
/*                     {% endif %}*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*     {% else %}*/
/*         <tr>*/
/*             <td colspan="6">*/
/*                 {% trans from 'FOSMessageBundle' %}no_thread{% endtrans %}.*/
/*             </td>*/
/*         </tr>*/
/*     {% endif %}*/
/* */
/*     </tbody>*/
/* */
/* </table>*/
/* */
