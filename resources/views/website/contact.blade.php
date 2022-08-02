{{-- صباح الفل يا رايق  --}}


@extends('website.layout.layout')

@section('body')
<div class="container">
    <!-- Comment Form Start -->
    <div class="bg-light mb-3" style="padding: 30px;">
        <h3 class="mb-4">Leave a comment</h3>
        <form action="https://formsubmit.co/el/hiyani" method="POST">
            <div class="form-group">
                <label for="name">Name *</label>
                <input type="text" class="form-control" id="name">
            </div>
            <div class="form-group">
                <label for="email">Email *</label>
                <input type="email" class="form-control" id="email">
            </div>
    
            <div class="form-group">
                <label for="message">Message *</label>
                <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
            </div>
            <div class="form-group mb-0">
                <button type="submit" value="Leave a comment"
                    class="btn btn-primary font-weight-semi-bold py-2 px-3"></button>
            </div>
        </form>
    </div>
    <!-- Comment Form End -->
    </div>
@endsection
