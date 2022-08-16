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

/* pokemon/compare.html.twig */
class __TwigTemplate_cc05e1823d75e6e58ef56166c66891eb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pokemon/compare.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pokemon/compare.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pokemon/compare.html.twig", 1);
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
        echo "    <h1>Campare two pokemon</h1>
    <div class=\"container\">
          <div class=\"row\">
                ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pokemons"]) || array_key_exists("pokemons", $context) ? $context["pokemons"] : (function () { throw new RuntimeError('Variable "pokemons" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["pokemon"]) {
            // line 10
            echo "               
                   <div class=\"col\"> 
                    <table class=\"table\">
                    <h2>";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pokemon"], "english", [], "any", false, false, false, 13), "html", null, true);
            echo "</h2>
                        <tbody>
                                <tr><th scope=\"col\">Num</th> <td>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pokemon"], "id", [], "any", false, false, false, 15), "html", null, true);
            echo "</td>  </tr> 
                                <tr><th scope=\"col\"> Name</th> <td>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pokemon"], "english", [], "any", false, false, false, 16), "html", null, true);
            echo "</td> </tr> 
                                <tr><th scope=\"col\">Types</th>
                                        <td> 
                                            ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["pokemon"], "types", [], "any", false, false, false, 19));
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 20
                echo "                                                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "english", [], "any", false, false, false, 20), "html", null, true);
                echo " <br>  
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "                                        </td> 
                                </tr> 
                                <tr> <th scope=\"col\">HP</th> <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pokemon"], "stats", [], "any", false, false, false, 24), "hp", [], "any", false, false, false, 24), "html", null, true);
            echo "</td></tr> 
                                    <tr> <th scope=\"col\">Attack</th>    <td> ";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pokemon"], "stats", [], "any", false, false, false, 25), "attack", [], "any", false, false, false, 25), "html", null, true);
            echo " </td> </tr> 
                                    <tr> <th scope=\"col\">Defense</th>  <td> ";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pokemon"], "stats", [], "any", false, false, false, 26), "defence", [], "any", false, false, false, 26), "html", null, true);
            echo " </td></tr> 
                                    <tr> <th scope=\"col\">Sp. Atk</th> <td> ";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pokemon"], "stats", [], "any", false, false, false, 27), "spAtk", [], "any", false, false, false, 27), "html", null, true);
            echo " </td> </tr> 
                                    <tr> <th scope=\"col\">Sp. Def</th>  <td> ";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pokemon"], "stats", [], "any", false, false, false, 28), "spDef", [], "any", false, false, false, 28), "html", null, true);
            echo " </td> </tr>
                                    <tr>  <th scope=\"col\">Speed</th> <td> ";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pokemon"], "stats", [], "any", false, false, false, 29), "speed", [], "any", false, false, false, 29), "html", null, true);
            echo " </td> </tr> 
                                    <tr> <th scope=\"col\">Total</th> <td> ";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pokemon"], "stats", [], "any", false, false, false, 30), "total", [], "any", false, false, false, 30), "html", null, true);
            echo " </td></tr>      
                                            
                                    

                        </tbody>
                    </table>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pokemon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        </div>
     </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "pokemon/compare.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 38,  158 => 30,  154 => 29,  150 => 28,  146 => 27,  142 => 26,  138 => 25,  134 => 24,  130 => 22,  121 => 20,  117 => 19,  111 => 16,  107 => 15,  102 => 13,  97 => 10,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello PokemonController!{% endblock %}

{% block body %}
    <h1>Campare two pokemon</h1>
    <div class=\"container\">
          <div class=\"row\">
                {% for pokemon in pokemons %}
               
                   <div class=\"col\"> 
                    <table class=\"table\">
                    <h2>{{ pokemon.english }}</h2>
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
                </div>
                {% endfor %}
        </div>
     </div>
{% endblock %}
", "pokemon/compare.html.twig", "/var/www/pokemon_app/templates/pokemon/compare.html.twig");
    }
}
