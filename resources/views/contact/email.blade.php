<h2>Hello Atlas Admin,</h2>
<p>You have recieved a new email from Atlas.com</p><br>

<p>Contact information:</p>

<p>Name: {{ $name }}</p>
<p>Email: {{ $email }}</p>
<p>Phone: 0{{ $phone }}</p>
<p>Subject: {{ $subject }}</p>
@if($subject == "Training Booking")
    <p>Service: {{ $service }}</p>
    <p>Size: {{ $size }}</p>
    <p>Date: {{ $date }}</p>
@endif
<p>Message: {{ $form_message }}</p>