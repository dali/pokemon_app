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

/* pokemon/filter_type.html.twig */
class __TwigTemplate_7790cb52c2cb9466e0ade9d662437cef extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pokemon/filter_type.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pokemon/filter_type.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pokemon/filter_type.html.twig", 1);
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
        echo "    <h1>Welocome to pokemon page</h1>


<table class=\"table\">

  <thead>
    <tr>
      <th scope=\"col\">#</th>
      <th scope=\"col\"> Name</th>
      <th scope=\"col\">Types</th>
      <th scope=\"col\">Total</th>
      <th scope=\"col\">HP</th>
      <th scope=\"col\">Attack</th>
      <th scope=\"col\">Defense</th>
      <th scope=\"col\">Sp. Atk</th>
      <th scope=\"col\">Sp. Def</th>
      <th scope=\"col\">Speed</th>
    </tr>
  </thead>
  <tbody>
     ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pokemons"]) || array_key_exists("pokemons", $context) ? $context["pokemons"] : (function () { throw new RuntimeError('Variable "pokemons" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["pokemon"]) {
            // line 27
            echo "        <tr>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pokemon"], "id", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>  
                <td>
                <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pokemon_show", ["id" => twig_get_attribute($this->env, $this->source, $context["pokemon"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\">
                 ";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pokemon"], "english", [], "any", false, false, false, 31), "html", null, true);
            echo "
                </a>
                </td> 
                <td> 
                    ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["pokemon"], "types", [], "any", false, false, false, 35));
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 36
                echo "                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "english", [], "any", false, false, false, 36), "html", null, true);
                echo " <br>  
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "                </td> 
                <td> ";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pokemon"], "stats", [], "any", false, false, false, 39), "total", [], "any", false, false, false, 39), "html", null, true);
            echo " </td>
                <td> ";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pokemon"], "stats", [], "any", false, false, false, 40), "hp", [], "any", false, false, false, 40), "html", null, true);
            echo " </td>
                <td> ";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pokemon"], "stats", [], "any", false, false, false, 41), "attack", [], "any", false, false, false, 41), "html", null, true);
            echo " </td>
                <td> ";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pokemon"], "stats", [], "any", false, false, false, 42), "defence", [], "any", false, false, false, 42), "html", null, true);
            echo " </td>
                <td> ";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pokemon"], "stats", [], "any", false, false, false, 43), "spAtk", [], "any", false, false, false, 43), "html", null, true);
            echo " </td>
                <td> ";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pokemon"], "stats", [], "any", false, false, false, 44), "spDef", [], "any", false, false, false, 44), "html", null, true);
            echo " </td>
                <td> ";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pokemon"], "stats", [], "any", false, false, false, 45), "speed", [], "any", false, false, false, 45), "html", null, true);
            echo " </td>
                
                    
        </tr>           
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pokemon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "
  </tbody>
</table>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "pokemon/filter_type.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 50,  173 => 45,  169 => 44,  165 => 43,  161 => 42,  157 => 41,  153 => 40,  149 => 39,  146 => 38,  137 => 36,  133 => 35,  126 => 31,  122 => 30,  117 => 28,  114 => 27,  110 => 26,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello PokemonController!{% endblock %}

{% block body %}
    <h1>Welocome to pokemon page</h1>


<table class=\"table\">

  <thead>
    <tr>
      <th scope=\"col\">#</th>
      <th scope=\"col\"> Name</th>
      <th scope=\"col\">Types</th>
      <th scope=\"col\">Total</th>
      <th scope=\"col\">HP</th>
      <th scope=\"col\">Attack</th>
      <th scope=\"col\">Defense</th>
      <th scope=\"col\">Sp. Atk</th>
      <th scope=\"col\">Sp. Def</th>
      <th scope=\"col\">Speed</th>
    </tr>
  </thead>
  <tbody>
     {% for pokemon in pokemons %}
        <tr>
                <td>{{ pokemon.id }}</td>  
                <td>
                <a href=\"{{ path('pokemon_show', {id: pokemon.id}) }}\">
                 {{ pokemon.english }}
                </a>
                </td> 
                <td> 
                    {% for type in pokemon.types %}
                        {{ type.english }} <br>  
                    {% endfor %}
                </td> 
                <td> {{ pokemon.stats.total }} </td>
                <td> {{ pokemon.stats.hp }} </td>
                <td> {{ pokemon.stats.attack }} </td>
                <td> {{ pokemon.stats.defence }} </td>
                <td> {{ pokemon.stats.spAtk }} </td>
                <td> {{ pokemon.stats.spDef }} </td>
                <td> {{ pokemon.stats.speed }} </td>
                
                    
        </tr>           
        {% endfor %}

  </tbody>
</table>


{% endblock %}
", "pokemon/filter_type.html.twig", "/var/www/pokemon_app/templates/pokemon/filter_type.html.twig");
    }
}
