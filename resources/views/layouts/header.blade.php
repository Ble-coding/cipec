<header class="main-header main-header-one">
    {{--                                     
    jaune : #f1d741
    rouge : #e52329
    vert : #009a5e
    orange : #ef7b10
    noir : #000000
--}} 
<div class="main-header-one__top">
<div class="container">
<div class="main-header-one__top-inner">
<div class="main-header-one__top-left">
<div class="header-contact-info-one">
<ul>
<li>
<div class="icon">
<span class="icon-phone-call"></span>
</div>
<p><a href="tel:1-514-600-0010">{{ __('header.contact_details.phone_number') }}</a> </p>
</li>
<li>
<div class="icon">
<span class="icon-email"></span>
</div>
<p><a href="mailto:info@cipeccanada.org">{{ __('header.contact_details.email_address') }}</a></p>
</li>
</ul>

</div>
</div>
<div class="main-header-one__top-right">
<div class="header-social-link-one">
<ul class="clearfix">
<li>
<a href="https://web.facebook.com/cipeccanada?_rdc=1&_rdr" target="_blank">
<i class="icon-facebook"></i>
</a>
</li>
<li>
<a href="https://twitter.com/cipeccanada" target="_blank">
<i class="icon-twitter"></i>
</a>
</li>
{{-- <li>
<a href="#">
<i class="icon-linkedin"></i>
</a>
</li>
<li>
<a href="#">
<i class="icon-vimeo"></i>
</a>
</li> --}}
</ul>
</div>
</div>
</div>
</div>
</div>

<div class="main-header-one__bottom">
<div id="sticky-header" class="menu-area">
<div class="container">
<div class="main-header-one__bottom-inner">

<div class="main-header-one__bottom-left">
<div class="logo-box-one">
<a href="{{ route('home.index') }}">
<img src="assets/img/resource/logo-1.png" alt="Logo">
</a>
</div>
</div>

<div class="main-header-one__bottom-middle">
<div class="menu-area__inner">
<div class="mobile-nav-toggler">
<i class="fas fa-bars"></i>
</div>
<div class="menu-wrap">
<nav class="menu-nav">
<div class="navbar-wrap main-menu">
    {{-- <ul class="navigation">
        <li><a href="{{ route('home.index') }}">{{ __('header.main_menu.home') }}</a></li>
        <li class="menu-item-has-children"><a href="#">{{ __('header.main_menu.about_cipec') }}</a>
            <ul class="sub-menu">
                <li>
                    <a href="{{ route('presentations.index') }}">{{ __('header.main_menu.presentation') }}</a>
                </li>
                <li>
                    <a href="{{ route('roles.index') }}">{{ __('header.main_menu.role_and_mission') }}</a>
                </li>
                <li>
                    <a href="{{ route('projets.index') }}">{{ __('header.main_menu.projects') }}</a>
                </li>
                <li>
                    <a href="{{ route('teams.index') }}">{{ __('header.main_menu.our_team') }}</a>
                </li>
            </ul>
        </li>  
        <li class="menu-item-has-children"><a href="#">{{ __('header.main_menu.useful_links') }}</a>
            <ul class="sub-menu">
                <li class="menu-item-has-children-menu"><a href="#">{{ __('header.main_menu.ivory_coast') }}</a>
                    <ul class="sub-menu-sub">
                        <li>
                            <a target="_blank" href="http://civ.abidjan.net/connaitre">{{ __('header.useful_links.ivory_coast.presentation') }}</a>
                        </li>
                        <li>
                            <a target="_blank" href="http://civ.abidjan.net/histoire">{{ __('header.useful_links.ivory_coast.history') }}</a>
                        </li>
                        <li>
                            <a target="_blank" href="http://civ.abidjan.net/economie">{{ __('header.useful_links.ivory_coast.economy') }}</a>
                        </li>
                        <li>
                            <a target="_blank" href="http://civ.abidjan.net/geographie">{{ __('header.useful_links.ivory_coast.geography') }}</a>
                        </li>
                        <li>
                            <a target="_blank" href="http://civ.abidjan.net/culture">{{ __('header.useful_links.ivory_coast.culture') }}</a>
                        </li>
                        <li>
                            <a target="_blank" href="http://civ.abidjan.net/societe">{{ __('header.useful_links.ivory_coast.society') }}</a>
                        </li>
                        <li>
                            <a target="_blank" href="http://civ.abidjan.net/institutions-et-valeurs">{{ __('header.useful_links.ivory_coast.institution') }}</a>
                        </li>
                        <li>
                            <a target="_blank" href="http://www.speciamerica.org/formalite.php">{{ __('header.useful_links.ivory_coast.entry_formalities') }}</a>
                        </li>
                    </ul>  
                </li>
                <li class="menu-item-has-children-menu"><a href="#">{{ __('header.main_menu.investment_projects') }}</a>
                    <ul class="sub-menu-sub">
                        <li>
                            <a target="_blank" href="http://www.gcpnd.gouv.ci">{{ __('header.useful_links.investment_projects.presentation') }}</a>
                        </li>
                        <li>
                            <a target="_blank" href="http://www.gcpnd.gouv.ci/pppdoc.php?type=1&lang=">{{ __('header.useful_links.investment_projects.public_major_projects') }}</a>
                        </li>
                        <li>
                            <a target="_blank" href="http://www.gcpnd.gouv.ci/pppdoc.php?type=2&lang">{{ __('header.useful_links.investment_projects.public_private_partnership_projects') }}</a>
                        </li>
                        <li>
                            <a href="#">{{ __('header.useful_links.investment_projects.private_sme_projects') }}</a>
                        </li>
                        <li>
                            <a href="#">{{ __('header.useful_links.investment_projects.private_micro_projects') }}</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item-has-children-menu"><a href="#">{{ __('header.main_menu.business_creation') }}</a>
                    <ul class="sub-menu-sub">
                        <li>
                            <a href="#">{{ __('header.useful_links.business_creation.presentation') }}</a>
                        </li>
                        <li>
                            <a target="_blank" href="http://www.cepici.ci/?tmp=single_actu&p=le-guichet-unique&artcl=143">{{ __('header.useful_links.business_creation.pp_individual') }}</a>
                        </li>
                        <li>
                            <a target="_blank" href="http://www.cepici.ci/?tmp=single_actu&p=le-guichet-unique&artcl=143">{{ __('header.useful_links.business_creation.pm_sa') }}</a>
                        </li>
                        <li>
                            <a target="_blank" href="http://www.cepici.ci/?tmp=single_actu&p=le-guichet-unique&artcl=143">{{ __('header.useful_links.business_creation.pm_sarl') }}</a>
                        </li>
                        <li>
                            <a href="http://www.cepici.ci/?tmp=single_actu&p=le-guichet-unique&artcl=143">{{ __('header.useful_links.business_creation.pm_branch_office') }}</a>
                        </li>
                        <li>
                            <a target="_blank" href="http://www.cepici.ci/?tmp=single_actu&p=le-guichet-unique&artcl=153">{{ __('header.useful_links.business_creation.industrial_land') }}</a>
                        </li>
                    </ul>                                       
                </li>
                <li class="menu-item-has-children-menu"><a href="#">{{ __('header.main_menu.investment_formalities') }}</a>
                    <ul class="sub-menu-sub">
                        <li>
                            <a href="#">{{ __('header.useful_links.investment_formalities.presentation') }}</a>
                        </li>
                        <li>
                            <a target="_blank" href="http://www.cepici.ci/?tmp=single_actu&p=le-guichet-unique&artcl=144">{{ __('header.useful_links.investment_formalities.declaration_regime') }}</a>
                        </li>
                        <li>
                            <a target="_blank" href="http://www.cepici.ci/?tmp=single_actu&p=le-guichet-unique&artcl=144">{{ __('header.useful_links.investment_formalities.approval_regime') }}</a>
                        </li>
                        <li>
                            <a target="_blank" href="http://www.cepici.ci/?tmp=image-top&p=code-des-investissements">{{ __('header.useful_links.investment_formalities.investment_code') }}</a>
                        </li>
                    </ul>
                    
                </li>
            </ul>
        </li>
        <li><a href="{{ route('contacts.index') }}">{{ __('header.main_menu.contact') }}</a></li>
    </ul> --}}
    <ul class="navigation">
        <li class="{{ Route::currentRouteName() == 'home.index' ? 'active' : '' }}">
            <a href="{{ route('home.index') }}">{{ __('header.main_menu.home') }}</a>
        </li>
        <li class="menu-item-has-children {{ in_array(Route::currentRouteName(), ['presentations.index', 'roles.index', 'projets.index', 'teams.index']) ? 'active' : '' }}">
            <a href="#">{{ __('header.main_menu.about_cipec') }}</a>
            <ul class="sub-menu">
                <li class="{{ Route::currentRouteName() == 'presentations.index' ? 'active' : '' }}">
                    <a href="{{ route('presentations.index') }}">{{ __('header.main_menu.presentation') }}</a>
                </li>
                <li class="{{ Route::currentRouteName() == 'roles.index' ? 'active' : '' }}">
                    <a href="{{ route('roles.index') }}">{{ __('header.main_menu.role_and_mission') }}</a>
                </li>
                <li class="{{ Route::currentRouteName() == 'projets.index' ? 'active' : '' }}">
                    <a href="{{ route('projets.index') }}">{{ __('header.main_menu.projects') }}</a>
                </li>
                <li class="{{ Route::currentRouteName() == 'teams.index' ? 'active' : '' }}">
                    <a href="{{ route('teams.index') }}">{{ __('header.main_menu.our_team') }}</a>
                </li>
            </ul>
        </li>
        <li class="menu-item-has-children {{ in_array(Route::currentRouteName(), ['route1', 'route2']) ? 'active' : '' }}">
            <a href="#">{{ __('header.main_menu.useful_linksHeader') }}</a>
            <ul class="sub-menu">
                <li class="menu-item-has-children-menu"><a href="#">{{ __('header.main_menu.ivory_coast') }}</a>
                    <ul class="sub-menu-sub">
                        <li class="{{ Route::currentRouteName() == 'ivory_coast.presentation' ? 'active' : '' }}">
                            <a target="_blank" href="http://civ.abidjan.net/connaitre">{{ __('header.useful_links.ivory_coast.presentation') }}</a>
                        </li>
                        <li class="{{ Route::currentRouteName() == 'ivory_coast.history' ? 'active' : '' }}"> 
                            <a target="_blank" href="http://civ.abidjan.net/histoire">{{ __('header.useful_links.ivory_coast.history') }}</a>
                        </li>
                        <li class="{{ Route::currentRouteName() == 'ivory_coast.economy' ? 'active' : '' }}">
                            <a target="_blank" href="http://civ.abidjan.net/economie">{{ __('header.useful_links.ivory_coast.economy') }}</a>
                        </li>
                        <li class="{{ Route::currentRouteName() == 'ivory_coast.geography' ? 'active' : '' }}">
                            <a target="_blank" href="http://civ.abidjan.net/geographie">{{ __('header.useful_links.ivory_coast.geography') }}</a>
                        </li>
                        <li class="{{ Route::currentRouteName() == 'ivory_coast.culture' ? 'active' : '' }}">
                            <a target="_blank" href="http://civ.abidjan.net/culture">{{ __('header.useful_links.ivory_coast.culture') }}</a>
                        </li>
                        <li class="{{ Route::currentRouteName() == 'ivory_coast.society' ? 'active' : '' }}">
                            <a target="_blank" href="http://civ.abidjan.net/societe">{{ __('header.useful_links.ivory_coast.society') }}</a>
                        </li>
                        <li class="{{ Route::currentRouteName() == 'ivory_coast.institution' ? 'active' : '' }}">
                            <a target="_blank" href="http://civ.abidjan.net/institutions-et-valeurs">{{ __('header.useful_links.ivory_coast.institution') }}</a>
                        </li>
                        <li class="{{ Route::currentRouteName() == 'ivory_coast.entry_formalities' ? 'active' : '' }}">
                            <a target="_blank" href="http://www.speciamerica.org/formalite.php">{{ __('header.useful_links.ivory_coast.entry_formalities') }}</a>
                        </li>
                    </ul> 
                </li>
                <li class="menu-item-has-children-menu"><a href="#">{{ __('header.main_menu.investment_projects') }}</a>
                    <ul class="sub-menu-sub">
                        <li class="{{ Route::currentRouteName() == 'investment_projects.presentation' ? 'active' : '' }}">
                            <a target="_blank" href="http://www.gcpnd.gouv.ci">{{ __('header.useful_links.investment_projects.presentation') }}</a>
                        </li>
                        <li class="{{ Route::currentRouteName() == 'investment_projects.public_major_projects' ? 'active' : '' }}">
                            <a target="_blank" href="http://www.gcpnd.gouv.ci/pppdoc.php?type=1&lang=">{{ __('header.useful_links.investment_projects.public_major_projects') }}</a>
                        </li>
                        <li class="{{ Route::currentRouteName() == 'investment_projects.public_private_partnership_projects' ? 'active' : '' }}">
                            <a target="_blank" href="http://www.gcpnd.gouv.ci/pppdoc.php?type=2&lang">{{ __('header.useful_links.investment_projects.public_private_partnership_projects') }}</a>
                        </li>
                        <li class="{{ Route::currentRouteName() == 'investment_projects.private_sme_projects' ? 'active' : '' }}">
                            <a href="#">{{ __('header.useful_links.investment_projects.private_sme_projects') }}</a>
                        </li>
                        <li class="{{ Route::currentRouteName() == 'investment_projects.private_micro_projects' ? 'active' : '' }}">
                            <a  href="#">{{ __('header.useful_links.investment_projects.private_micro_projects') }}</a>
                        </li>
                    </ul>                             
                </li>
                <li class="menu-item-has-children-menu"><a href="#">{{ __('header.main_menu.business_creation') }}</a>
                    <ul class="sub-menu-sub">
                        <li class="{{ Route::currentRouteName() == 'business_creation.presentation' ? 'active' : '' }}">
                            <a  href="#">{{ __('header.useful_links.business_creation.presentation') }}</a>
                        </li>
                        <li class="{{ Route::currentRouteName() == 'business_creation.pp_individual' ? 'active' : '' }}">
                            <a target="_blank" href="http://www.cepici.ci/?tmp=single_actu&p=le-guichet-unique&artcl=143">{{ __('header.useful_links.business_creation.pp_individual') }}</a>
                        </li>
                        <li class="{{ Route::currentRouteName() == 'business_creation.pm_sa' ? 'active' : '' }}">
                            <a target="_blank" href="http://www.cepici.ci/?tmp=single_actu&p=le-guichet-unique&artcl=143">{{ __('header.useful_links.business_creation.pm_sa') }}</a>
                        </li>
                        <li class="{{ Route::currentRouteName() == 'business_creation.pm_sarl' ? 'active' : '' }}">
                            <a target="_blank" href="http://www.cepici.ci/?tmp=single_actu&p=le-guichet-unique&artcl=143">{{ __('header.useful_links.business_creation.pm_sarl') }}</a>
                        </li>
                        <li class="{{ Route::currentRouteName() == 'business_creation.pm_branch_office' ? 'active' : '' }}">
                            <a target="_blank" href="http://www.cepici.ci/?tmp=single_actu&p=le-guichet-unique&artcl=143">{{ __('header.useful_links.business_creation.pm_branch_office') }}</a>
                        </li>
                        <li class="{{ Route::currentRouteName() == 'business_creation.industrial_land' ? 'active' : '' }}">
                            <a target="_blank" href="http://www.cepici.ci/?tmp=single_actu&p=le-guichet-unique&artcl=153">{{ __('header.useful_links.business_creation.industrial_land') }}</a>
                        </li>
                    </ul>                                                                                            
                </li>
                <li class="menu-item-has-children-menu"><a href="#">{{ __('header.main_menu.investment_formalities') }}</a>
                    <ul class="sub-menu-sub">
                        <li class="{{ Route::currentRouteName() == 'investment_formalities.presentation' ? 'active' : '' }}">
                            <a href="#">{{ __('header.useful_links.investment_formalities.presentation') }}</a>
                        </li>
                        <li class="{{ Route::currentRouteName() == 'investment_formalities.declaration_regime' ? 'active' : '' }}">
                            <a target="_blank" href="http://www.cepici.ci/?tmp=single_actu&p=le-guichet-unique&artcl=144">{{ __('header.useful_links.investment_formalities.declaration_regime') }}</a>
                        </li>
                        <li class="{{ Route::currentRouteName() == 'investment_formalities.approval_regime' ? 'active' : '' }}">
                            <a target="_blank" href="http://www.cepici.ci/?tmp=single_actu&p=le-guichet-unique&artcl=144">{{ __('header.useful_links.investment_formalities.approval_regime') }}</a>
                        </li>
                        <li class="{{ Route::currentRouteName() == 'investment_formalities.investment_code' ? 'active' : '' }}">
                            <a target="_blank" href="http://www.cepici.ci/?tmp=image-top&p=code-des-investissements">{{ __('header.useful_links.investment_formalities.investment_code') }}</a>
                        </li>
                    </ul>                                                       
                </li>
            </ul>
        </li> 
        <li class="d-block d-sm-none {{ Route::currentRouteName() == 'activites.index' ? 'active' : '' }}">
            <a href="{{ route('activites.index') }}">{{ __('header.main_menu.activities') }}</a>
        </li>        
        <li class="{{ Route::currentRouteName() == 'contacts.index' ? 'active' : '' }}">
            <a href="{{ route('contacts.index') }}">{{ __('header.main_menu.contact') }}</a>
        </li>
        <li class="menu-item-has-children">

            @if(app()->getLocale() === 'en')
                <a><span class="flag-icon flag-icon-gb"></span> {{ __('language.language') }}</a>
                <ul class="sub-menu">
                    {{-- <li>
                        <a href="locale/en" data-lang="en"><span class="flag-icon flag-icon-gb"></span> English</a>
                    </li> --}}
                    <li>
                        <a href="locale/fr" data-lang="fr"><span class="flag-icon flag-icon-fr"></span> Français</a>
                    </li>
                </ul>
            @else
                <a><span class="flag-icon flag-icon-fr"></span> {{ __('language.language') }}</a>
                <ul class="sub-menu">
                    {{-- <li>
                        <a href="locale/fr" data-lang="fr"><span class="flag-icon flag-icon-fr"></span> Français</a>
                    </li> --}}
                    <li>
                        <a href="locale/en" data-lang="en"><span class="flag-icon flag-icon-gb"></span> English</a>
                    </li>
                </ul>
            @endif
            {{-- <a> {{ __('language.language') }}</a> --}}
            
        </li>
    </ul>
    
</div>
</nav>
</div>
</div>
</div>

<div class="main-header-one__bottom-right">                     
    <div class="header-btn-box-one">
        <a class="thm-btn" href="{{route('activites.index') }}">
            <span class="txt">{{ __('header.main_menu.activities') }}</span>
        </a>
    </div>
</div>

</div>
</div>
</div>
</div>

<!--Start Mobile Menu  -->
<div class="mobile-menu">
<nav class="menu-box">
<div class="close-btn">
<i class="fas fa-times"></i>
</div>
<div class="nav-logo">
<a href="{{ route('home.index') }}">
<img src="assets/img/resource/mobile-menu-logo.png" alt="Logo">
</a>
</div>
<div class="menu-outer">
<!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
</div>
<div class="contact-info">
<div class="icon-box"><span class="icon-phone-call"></span>
</div>
<p>
<a href="tel:1-514-600-0010 ">{{ __('header.contact_details.phone_number') }}</a>

</p>
</div>
<div class="social-links">
<ul class="clearfix list-wrap">
<li><a href="https://web.facebook.com/cipeccanada?_rdc=1&_rdr"><i class="fab fa-facebook-f"></i></a></li>
<li><a href="https://twitter.com/cipeccanada"><i class="fab fa-twitter"></i></a></li>
</ul>
</div>
</nav>
</div>
<div class="menu-backdrop"></div>
<!-- End Mobile Menu -->
</header>