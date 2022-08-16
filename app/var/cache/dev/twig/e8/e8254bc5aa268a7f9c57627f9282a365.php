<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* pokemon/show.html.twig */
class __TwigTemplate_c1d5ff89362359514db42cf99e24ec31 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pokemon/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pokemon/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pokemon/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello PokemonController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Welocome to pokemon single page</h1>

                <table class=\"table\">

                            <tbody>
                                <tr><th scope=\"col\">Num</th> <td>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11), "html", null, true);
        echo "</td>  </tr> 
                                <tr><th scope=\"col\"> Name</th> <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 12, $this->source); })()), "english", [], "any", false, false, false, 12), "html", null, true);
        echo "</td> </tr> 
                                <tr><th scope=\"col\">Types</th>
                                        <td> 
                                            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 15, $this->source); })()), "types", [], "any", false, false, false, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 16
            echo "                                                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "english", [], "any", false, false, false, 16), "html", null, true);
            echo " <br>  
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "                                        </td> 
                                </tr> 
                                <tr> <th scope=\"col\">HP</th> <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 20, $this->source); })()), "stats", [], "any", false, false, false, 20), "hp", [], "any", false, false, false, 20), "html", null, true);
        echo "</td></tr> 
                                    <tr> <th scope=\"col\">Attack</th>    <td> ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 21, $this->source); })()), "stats", [], "any", false, false, false, 21), "attack", [], "any", false, false, false, 21), "html", null, true);
        echo " </td> </tr> 
                                    <tr> <th scope=\"col\">Defense</th>  <td> ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 22, $this->source); })()), "stats", [], "any", false, false, false, 22), "defence", [], "any", false, false, false, 22), "html", null, true);
        echo " </td></tr> 
                                    <tr> <th scope=\"col\">Sp. Atk</th> <td> ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 23, $this->source); })()), "stats", [], "any", false, false, false, 23), "spAtk", [], "any", false, false, false, 23), "html", null, true);
        echo " </td> </tr> 
                                    <tr> <th scope=\"col\">Sp. Def</th>  <td> ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 24, $this->source); })()), "stats", [], "any", false, false, false, 24), "spDef", [], "any", false, false, false, 24), "html", null, true);
        echo " </td> </tr>
                                    <tr>  <th scope=\"col\">Speed</th> <td> ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 25, $this->source); })()), "stats", [], "any", false, false, false, 25), "speed", [], "any", false, false, false, 25), "html", null, true);
        echo " </td> </tr> 
                                    <tr> <th scope=\"col\">Total</th> <td> ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pokemon"]) || array_key_exists("pokemon", $context) ? $context["pokemon"] : (function () { throw new RuntimeError('Variable "pokemon" does not exist.', 26, $this->source); })()), "stats", [], "any", false, false, false, 26), "total", [], "any", false, false, false, 26), "html", null, true);
        echo " </td></tr>    
               

                            </tbody>
                </table>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "pokemon/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 26,  142 => 25,  138 => 24,  134 => 23,  130 => 22,  126 => 21,  122 => 20,  118 => 18,  109 => 16,  105 => 15,  99 => 12,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello PokemonController!{% endblock %}

{% block body %}
    <h1>Welocome to pokemon single page</h1>

                <table class=\"table\">

                            <tbody>
                                <tr><th scope=\"col\">Num</th> <td>{{ pokemon.id }}</td>  </tr> 
                                <tr><th scope=\"col\"> Name</th> <td>{{ pokemon.english }}</td> </tr> 
                                <tr><th scope=\"col\">Types</th>
                                        <td> 
                                            {% for type in pokemon.types %}
                                                {{ type.english }} <br>  
                                            {% endfor %}
                                        </td> 
                                </tr> 
                                <tr> <th scope=\"col\">HP</th> <td>{{ pokemon.stats.hp }}</td></tr> 
                                    <tr> <th scope=\"col\">Attack</th>    <td> {{ pokemon.stats.attack }} </td> </tr> 
                                    <tr> <th scope=\"col\">Defense</th>  <td> {{ pokemon.stats.defence }} </td></tr> 
                                    <tr> <th scope=\"col\">Sp. Atk</th> <td> {{ pokemon.stats.spAtk }} </td> </tr> 
                                    <tr> <th scope=\"col\">Sp. Def</th>  <td> {{ pokemon.stats.spDef }} </td> </tr>
                                    <tr>  <th scope=\"col\">Speed</th> <td> {{ pokemon.stats.speed }} </td> </tr> 
                                    <tr> <th scope=\"col\">Total</th> <td> {{ pokemon.stats.total }} </td></tr>    
               

                            </tbody>
                </table>


{% endblock %}
", "pokemon/show.html.twig", "/var/www/pokemon_app/templates/pokemon/show.html.twig");
    }
}
