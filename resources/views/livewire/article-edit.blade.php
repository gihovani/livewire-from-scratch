<div class="m-auto w-9/12">
    <h3 class="text-lg text-gray-200 mb-3">Edit Article</h3>
    <div wire:dirty>Form data has changed</div>
    <form wire:submit="save">
        <div class="mb-3">
            <label wire:dirty.class="text-orange-400" wire:target="form.title">
                Title<span wire:dirty wire:target="form.title">*</span>
                <input
                    type="text"
                    class="p-2 w-full border rounded-md bg-gray-700 text-white"
                    wire:model="form.title"/>
            </label>
            @error('form.title')
            <span class="text-red-600">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label wire:dirty.class="text-orange-400" wire:target="form.content">
                Content<span wire:dirty wire:target="form.content">*</span>
                <textarea rows="10"
                    class="p-2 w-full border rounded-md bg-gray-700 text-white"
                    wire:model="form.content"></textarea>
            </label>
            @error('form.content')
            <span class="text-red-600">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label class="flex items-center" wire:dirty.class="text-orange-400" wire:target="form.published">
                <input type="checkbox" class="mr-2" name="published"
                       value="true"
                       wire:model.boolean="form.published"/>
                Published<span wire:dirty wire:target="form.published">*</span>
            </label>
        </div>
        <div class="mb-3">
            <div class="mb-2" wire:dirty.class="text-orange-400" wire:target="form.notifications">
                Notification Options<span wire:dirty wire:target="form.notifications">*</span>
            </div>
            <div class="flex gap-6 mb-3">
                <label class="flex items-center">
                    <input type="radio" class="mr-2" name="allowNotifications"
                           value="true"
                           wire:model.boolean="form.allowNotifications"/>
                    Yes
                </label>
                <label class="flex items-center">
                    <input type="radio" class="mr-2" name="allowNotifications"
                           value="false"
                           wire:model.boolean="form.allowNotifications"/>
                    No
                </label>
            </div>

            <div x-show="$wire.form.allowNotifications">
                <label class="flex items-center">
                    <input type="checkbox" class="mr-2" name="notifications"
                           value="email"
                           wire:model="form.notifications"/>
                    E-mail
                </label>
                <label class="flex items-center">
                    <input type="checkbox" class="mr-2" name="notifications"
                           value="sms"
                           wire:model="form.notifications"/>
                    SMS
                </label>
                <label class="flex items-center">
                    <input type="checkbox" class="mr-2" name="notifications"
                           value="push"
                           wire:model="form.notifications"/>
                    Push
                </label>
            </div>
        </div>
        <div class="mb-3">
            <button
                class="text-gray-200 p-2 bg-blue-700 rounded-sm disabled:opacity-75 disabled:bg-blue-300"
                type="submit"
                wire:dirty.class="hover:bg-blue-900"
                wire:dirty.remove.attr="disabled"
                disabled>
                Save
            </button>
        </div>
    </form>
</div>

