@extends('front.layouts.master')

@section('title')
    Detail
@endsection

@section('content')
<section id="content" class="s-content s-content--blog">

    <div class="row entry-wrap">
        <div class="column lg-12">

            <livewire:front.news.detail :slug="$slug"/>

            {{-- <!-- comments -->
            <div class="comments-wrap">

                <div id="comments">
                    <div class="large-12">

                        <h3>5 Comments</h3>

                        <!-- START commentlist -->
                        <ol class="commentlist">

                            <li class="depth-1 comment">

                                <div class="comment__avatar">
                                    <img class="avatar" src="images/avatars/user-01.jpg" alt="" width="50" height="50">
                                </div>

                                <div class="comment__content">

                                    <div class="comment__info">
                                        <div class="comment__author">Itachi Uchiha</div>

                                        <div class="comment__meta">
                                            <div class="comment__time">Aug 15, 2021</div>
                                            <div class="comment__reply">
                                                <a class="comment-reply-link" href="#0">Reply</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="comment__text">
                                    <p>Adhuc quaerendum est ne, vis ut harum tantas noluisse, id suas iisque mei. Nec te inani ponderum vulputate,
                                    facilisi expetenda has et. Iudico dictas scriptorem an vim, ei alia mentitum est, ne has voluptua praesent.</p>
                                    </div>

                                </div>

                            </li> <!-- end comment level 1 -->

                            <li class="thread-alt depth-1 comment">

                                <div class="comment__avatar">
                                    <img class="avatar" src="images/avatars/user-04.jpg" alt="" width="50" height="50">
                                </div>

                                <div class="comment__content">

                                    <div class="comment__info">
                                        <div class="comment__author">John Doe</div>

                                        <div class="comment__meta">
                                            <div class="comment__time">Aug 14, 2021</div>
                                            <div class="comment__reply">
                                                <a class="comment-reply-link" href="#0">Reply</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="comment__text">
                                    <p>Sumo euismod dissentiunt ne sit, ad eos iudico qualisque adversarium, tota falli et mei. Esse euismod
                                    urbanitas ut sed, et duo scaevola pericula splendide. Primis veritus contentiones nec ad, nec et
                                    tantas semper delicatissimi.</p>
                                    </div>

                                </div>

                                <ul class="children">

                                    <li class="depth-2 comment">

                                        <div class="comment__avatar">
                                            <img class="avatar" src="images/avatars/user-03.jpg" alt="" width="50" height="50">
                                        </div>

                                        <div class="comment__content">

                                            <div class="comment__info">
                                                <div class="comment__author">Kakashi Hatake</div>

                                                <div class="comment__meta">
                                                    <div class="comment__time">Aug 14, 2021</div>
                                                    <div class="comment__reply">
                                                        <a class="comment-reply-link" href="#0">Reply</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="comment__text">
                                                <p>Duis sed odio sit amet nibh vulputate
                                                cursus a sit amet mauris. Morbi accumsan ipsum velit. Duis sed odio sit amet nibh vulputate
                                                cursus a sit amet mauris</p>
                                            </div>

                                        </div>

                                        <ul class="children">

                                            <li class="depth-3 comment">

                                                <div class="comment__avatar">
                                                    <img class="avatar" src="images/avatars/user-04.jpg" alt="" width="50" height="50">
                                                </div>

                                                <div class="comment__content">

                                                    <div class="comment__info">
                                                        <div class="comment__author">John Doe</div>

                                                        <div class="comment__meta">
                                                            <div class="comment__time">Aug 14, 2021</div>
                                                            <div class="comment__reply">
                                                                <a class="comment-reply-link" href="#0">Reply</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="comment__text">
                                                    <p>Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est
                                                    etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
                                                    </div>

                                                </div>

                                            </li>

                                        </ul>

                                    </li>

                                </ul>

                            </li> <!-- end comment level 1 -->

                            <li class="depth-1 comment">

                                <div class="comment__avatar">
                                    <img class="avatar" src="images/avatars/user-02.jpg" alt="" width="50" height="50">
                                </div>

                                <div class="comment__content">

                                    <div class="comment__info">
                                        <div class="comment__author">Shikamaru Nara</div>

                                        <div class="comment__meta">
                                            <div class="comment__time">Aug 13, 2021</div>
                                            <div class="comment__reply">
                                                <a class="comment-reply-link" href="#0">Reply</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="comment__text">
                                    <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.</p>
                                    </div>

                                </div>

                            </li>  <!-- end comment level 1 -->

                        </ol>
                        <!-- END commentlist -->

                    </div> <!-- end col-full -->
                </div> <!-- end comments -->


                <div class="comment-respond">

                    <!-- START respond -->
                    <div id="respond">

                        <h3>
                        Add Comment 
                        <span>Your email address will not be published.</span>
                        </h3>

                        <form name="contactForm" id="contactForm" method="post" action="" autocomplete="off">
                            <fieldset class="row">

                                <div class="column lg-6 tab-12 form-field">
                                    <input name="cName" id="cName" class="u-fullwidth h-remove-bottom" placeholder="Your Name" value="" type="text">
                                </div>

                                <div class="column lg-6 tab-12 form-field">
                                    <input name="cEmail" id="cEmail" class="u-fullwidth h-remove-bottom" placeholder="Your Email" value="" type="text">
                                </div>

                                <div class="column lg-12 form-field">
                                    <input name="cWebsite" id="cWebsite" class="u-fullwidth h-remove-bottom" placeholder="Website" value="" type="text">
                                </div>

                                <div class="column lg-12 message form-field">
                                    <textarea name="cMessage" id="cMessage" class="u-fullwidth" placeholder="Your Message"></textarea>
                                </div>

                                <div class="column lg-12">
                                    <input name="submit" id="submit" class="btn btn--primary btn-wide btn--large u-fullwidth" value="Add Comment" type="submit">
                                </div>

                            </fieldset>
                        </form> <!-- end form -->

                    </div>
                    <!-- END respond-->

                </div> <!-- end comment-respond -->

            </div> <!-- end comments-wrap --> --}}

        </div>
    </div> <!-- end entry-wrap -->
</section> <!-- end s-content -->
@endsection