<x-layout>
    <div class="note-container single-note">
        <h1>Create New Note</h1>
        <form action={{route('note.store')}} class="note" method="POST">
          @csrf
            <textarea name="note" 
                  id="10" cols="30" rows="10" 
                  class="note-body" 
                  placeholder="Enter Your Note Here">
            </textarea>
            <div class="note-buttons">
              <a href={{route('note.index')}} class="note-cancel-button">Cancel</a>
              <button class="note-submit-button">Submit</button>
            </div>
        </form>
    </div>
</x-layout>
