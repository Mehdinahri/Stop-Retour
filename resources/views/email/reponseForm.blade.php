@component('mail::message')
#Vous avez des nouvelles par rapport votre billet :

<table>
    <tr>
        <td><b>Sujet: </b></td>
        <td>{{ $reponse->ticket->objet }}</td>
    </tr>
    <tr>
        <td><b>Priorité :</b></td>
        <td>{{ $reponse->ticket->priorite }}</td>
    </tr>
    <tr>
        <td><b>Statut :</b></td>
        <td>@if( $reponse->ticket->etat == 0 )
            <span style='color: green'>Ouvert</span>
            @else
            <span style='color: red'>Fermé</span>
            @endif
        </td>
    </tr>
</table><br><br>
@component('mail::button', ['url' => "https://www.stop-retour.com/"])
Voir plus
@endcomponent
Si vous avez des questions ou des préoccupations, veuillez contacter: contact@stop-retour.com
 <br>
 <br>
Merci,<br>
Équipe Stop-Retour
@endcomponent
 
 