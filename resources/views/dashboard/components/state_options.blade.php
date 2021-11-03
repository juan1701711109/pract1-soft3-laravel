{{-- 'published', 'reject', 'in_review' --}}
<option value="in_review">En Revison</option>
<option value="reject" {{$val == 'reject' ? 'selected="selected"': ''}}>Rechazado</option>
<option value="published" {{$val == 'published' ? 'selected="selected"': ''}}>Publicado</option>