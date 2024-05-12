<form class="default-form2" action="{{ route('envoyerEmail') }}" method="post" enctype="multipart/form-data">
    @csrf <!-- Ajout du token CSRF -->

    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6">
            <div class="form-group">
                <div class="input-box">
                    <input type="text" name="nom" id="formName" placeholder="{{ __('contact.form.name') }}" required="">
                </div>
            </div>
        </div>
    
        <div class="col-xl-6 col-lg-6 col-md-6">
            <div class="form-group">
                <div class="input-box">
                    <input type="text" name="sujet" value="" id="formSubject" placeholder="{{ __('contact.form.subject') }}">
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6">
            <div class="form-group">
                <div class="input-box">
                    <input type="email" name="email" id="formEmail" placeholder="{{ __('contact.form.email') }}" required="">
                </div>
            </div>
        </div>
    
        <div class="col-xl-6 col-lg-6 col-md-6">
            <div class="form-group">
                <div class="input-box">
                    <input type="tel" name="phone" value="" id="formPhone" placeholder="{{ __('contact.form.phone') }}">
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-xl-12">
            <div class="form-group">
                <div class="input-box">
                    <textarea name="message" id="formMessage" placeholder="{{ __('contact.form.message') }}" required=""></textarea>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-xl-12">
            <div class="button-box">
                <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                <button class="thm-btn" type="submit" data-loading-text="{{ __('contact.form.submit_loading_text') }}">
                    <span class="txt">
                        {{ __('contact.form.submit_text') }}
                        <i class="icon-next"></i>
                    </span>
                </button>
            </div>
        </div>
    </div>
    
</form>
<!-- Ajoutez un conteneur pour afficher les messages -->
<!-- Ajoutez ces éléments où vous souhaitez afficher les messages -->
<div id="success-message" style="display: none;">{{ __('contact.messages.success') }}</div>
<div id="error-message" style="display: none;">{{ __('contact.messages.error') }}</div>


