@extends('layouts.tamplate')
@section('content')
<div class="container">
        <div class="text-center quiz">
         <img src="img/nei.jpg" alt="3in drahem" class="img-thumbnail imgquiz">
         <div class="description">
         <p>
                Un texte est une série orale ou écrite de mots perçus comme constituant un ensemble cohérent, porteur de sens et utilisant les structures propres à une langue. Un texte n'a pas de longueur déterminée sauf dans le cas de poèmes à forme fixe comme le sonnet ou le haïku
         </p>
         </div>
         <form>
	
            <div class="quiz1">
                <input id="male" type="radio" name="gender" value="male" required> 
                 <label for="male" class="quizlabel">Male</label>
            </div>
            <div class="quiz2">
                <input id="female" type="radio" name="gender" value="female" required> 
                 <label for="female" class="quizlabel">Female</label>
            </div>
            <div class="quiz3">
                <input id="other" type="radio" name="gender" value="other" required>
            <label for="other" class="quizlabel">Child</label>
            </div>
            <div>
                    <button type="button" class="btn btn-outline-success validquiz">Success</button>
             </div>
        </form>
        </div>
</div>
@endsection