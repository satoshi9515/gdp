<?php

/* encoding/kanji_encoding_form.twig */
class __TwigTemplate_0fe882ea20b67e112df1f820fd2a60c94f7978da9b152b030ae8b7fe0ad0399d extends Twig_Template
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
        echo "<ul>
    <li>
        <input type=\"radio\" name=\"knjenc\" value=\"\" checked=\"checked\" id=\"kj-none\" />
        <label for=\"kj-none\">
            ";
        // line 6
        echo "            ";
        echo _pgettext(        "None encoding conversion", "None");
        // line 7
        echo "        </label>
        <input type=\"radio\" name=\"knjenc\" value=\"EUC-JP\" id=\"kj-euc\" />
        <label for=\"kj-euc\">EUC</label>
        <input type=\"radio\" name=\"knjenc\" value=\"SJIS\" id=\"kj-sjis\" />
        <label for=\"kj-sjis\">SJIS</label>
    </li>
    <li>
        <input type=\"checkbox\" name=\"xkana\" value=\"kana\" id=\"kj-kana\" />
        <label for=\"kj-kana\">
            ";
        // line 17
        echo "            ";
        echo _gettext("Convert to Kana");
        // line 18
        echo "        </label>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "encoding/kanji_encoding_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 18,  39 => 17,  28 => 7,  25 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "encoding/kanji_encoding_form.twig", "/home/ec2-user/environment/gdp/public/phpMyAdmin/templates/encoding/kanji_encoding_form.twig");
    }
}
