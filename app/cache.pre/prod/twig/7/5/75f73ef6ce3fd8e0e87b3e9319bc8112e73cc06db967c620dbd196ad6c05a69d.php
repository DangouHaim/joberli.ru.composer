<?php

/* @Message/Message/block/messages.html.twig */
class __TwigTemplate_3a1d4b9a9f5395035bdc8e26e44edf7a0a9548c26e857865f27fff8b78e9216f extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 2
            echo "    <div class=\"timeline-item\"  id=\"message_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "id", array()), "html", null, true);
            echo "\">
        <div class=\"timeline-badge\">
            <img class=\"timeline-badge-userpic\" src=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('liip_imagine')->filter($this->getAttribute($this->getAttribute($context["message"], "sender", array()), "avatarImg", array()), "ava_chat")), "html", null, true);
            echo "\">
        </div>
        <div class=\"timeline-body\">
            <div class=\"timeline-body-arrow\">
            </div>
            <div class=\"timeline-body-head\">
                <div class=\"timeline-body-head-caption\">
                    <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_page", array("id" => $this->getAttribute($this->getAttribute($context["message"], "sender", array()), "id", array()))), "html", null, true);
            echo "\" class=\"timeline-body-title font-blue-madison\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["message"], "sender", array()), "username", array()), "html", null, true);
            echo "</a>
                    <span class=\"timeline-body-time font-grey-cascade\">";
            // line 12
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["message"], "createdAt", array())), "html", null, true);
            echo "</span>
                </div>

            </div>
            <div class=\"timeline-body-content\">
                        <span class=\"font-grey-cascade\">
                        ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "body", array()), "html", null, true);
            echo "
                        </span>
            </div>
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "@Message/Message/block/messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 18,  45 => 12,  39 => 11,  29 => 4,  23 => 2,  19 => 1,);
    }
}
/* {% for message in messages %}*/
/*     <div class="timeline-item"  id="message_{{ message.id }}">*/
/*         <div class="timeline-badge">*/
/*             <img class="timeline-badge-userpic" src="{{ asset(message.sender.avatarImg|imagine_filter('ava_chat')) }}">*/
/*         </div>*/
/*         <div class="timeline-body">*/
/*             <div class="timeline-body-arrow">*/
/*             </div>*/
/*             <div class="timeline-body-head">*/
/*                 <div class="timeline-body-head-caption">*/
/*                     <a href="{{ path('user_page', {'id': message.sender.id}) }}" class="timeline-body-title font-blue-madison">{{ message.sender.username }}</a>*/
/*                     <span class="timeline-body-time font-grey-cascade">{{ message.createdAt|date }}</span>*/
/*                 </div>*/
/* */
/*             </div>*/
/*             <div class="timeline-body-content">*/
/*                         <span class="font-grey-cascade">*/
/*                         {{ message.body }}*/
/*                         </span>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endfor %}*/
