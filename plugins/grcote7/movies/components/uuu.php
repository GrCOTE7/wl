
{%  set actors = __SELF__.actors %}

<h3>Liste des acteurs enregistrés:</h3>
<ul>
    {% for actor in actors %}
    <li>{{ actor.name }} {{ actor.lastname }}</li>
    {% endfor %}
</ul>