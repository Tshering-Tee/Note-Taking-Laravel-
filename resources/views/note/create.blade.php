<x-app-layout>
    <div class="note-container single-note">
        <h1>Create new note</h1>
        <form action=" {{ route('note.store')}} " method="POST" class="note">
            @csrf
            <textarea name="note" rows="10" class="note-body" placeholder="Enter Your note here"></textarea>
            <div class="note-button">
                <a href=" {{ route('note.index')}} " class="note-cancel-button">Cancel</a>
                <button class="note-submit-button">Submit</button>
            </div>
        </form>
    </div>
</x-app-layout>
