@extends('ged-client.layouts.ClientLayout')
@section('title')
Client Page
@endsection
@section('content')

<section class="doc_banner_area banner_creative1">
    <ul class="list-unstyled banner_shap_img">
        <li><img src="../../../assetsDossier/img/new/banner_shap1.png" alt=""></li>
        <li><img src="../../../assetsDossier/img/new/banner_shap4.png" alt=""></li>
        <li><img src="../../../assetsDossier/img/new/banner_shap3.png" alt=""></li>
        <li><img src="../../../assetsDossier/img/new/banner_shap2.png" alt=""></li>
        <li><img data-parallax='{"x": -180, "y": 80, "rotateY":2000}' src="../../../assetsDossier/img/new/plus1.png"
                alt="">
        </li>
        <li><img data-parallax='{"x": -50, "y": -160, "rotateZ":200}' src="../../../assetsDossier/img/new/plus2.png"
                alt="">
        </li>
        <li></li>
        <li></li>
        <li></li>
    </ul>

    <div class="container">
        <div class="doc_banner_content">
            <h2 class="wow fadeInUp">How can we help you?</h2>
            <p class="wow fadeInUp" data-wow-delay="0.2s">Search here to get answers to your questions</p>
            <form action="#" class="header_search_form">
                <div class="header_search_form_info">
                    <div class="form-group">
                        <div class="input-wrapper">
                            <i class="icon_search"></i>
                            <input type='search' id="searchbox" autocomplete="off" name="search"
                                placeholder="Search the Doc" />
                            <div class="header_search_form_panel">
                                <ul class="list-unstyled">
                                    <li>Help Desk
                                        <ul class="list-unstyled search_item">
                                            <li><span>Configuration</span><a href="#">How to edit host and
                                                    port?</a></li>
                                            <li><span>Configuration</span><a href="#">The dev Property</a></li>
                                        </ul>
                                    </li>
                                    <li>Support
                                        <ul class="list-unstyled search_item">
                                            <li><span>Pages</span><a href="#">The asyncData Method</a></li>
                                        </ul>
                                    </li>
                                    <li>Documentation
                                        <ul class="list-unstyled search_item">
                                            <li><span>Getting Started</span><a href="#">The asyncData Method</a>
                                            </li>
                                            <li><span>Getting Started</span><a href="#">The asyncData Method</a>
                                            </li>
                                            <li><span>Getting Started</span><a href="#">The asyncData Method</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <select class="search-expand-types custom-select" name="post_type" id="search_post_type">
                                <option value="">All Docs </option>
                                <option value="manual_kb">Knowledge Base</option>
                                <option value="manual_documentation">Documentation</option>
                                <option value="manual_faq">FAQs</option>
                                <option value="forum">Forums</option>
                                <option value="manual_portfolio">Portfolio</option>
                                <option value="product">Products</option>
                            </select>
                        </div>
                        <button type="submit" class="header_form_submit">Search</button>
                    </div>

                </div>
                <div class="header_search_keyword">
                    <span class="header-search-form__keywords-label">Suggested Search:</span>
                    <ul class="list-unstyled">
                        <li class="wow fadeInUp" data-wow-delay="0.2s"><a href="#">guest users</a></li>
                        <li class="wow fadeInUp" data-wow-delay="0.3s"><a href="#">invoice</a></li>
                        <li class="wow fadeInUp" data-wow-delay="0.4s"><a href="#">security</a></li>
                    </ul>
                </div>
            </form>
        </div>
    </div>
</section>

<section class="doc_features_area">
    <img class="doc_features_shap" src="../../../assetsDossier/img/new/shap_white.png" alt="">
    <div class="container">
        <div class="doc_features_inner">
            <div class="media doc_features_item wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="0.5s">
                <img src="../../../assetsDossier/img/new/icon1.png" alt="">
                <div class="media-body">
                    <a href="#">
                        <h4>Knowledge Base</h4>
                    </a>
                    <p>245 Posts</p>
                </div>
            </div>
            <div class="media doc_features_item wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="0.6s">
                <img src="../../../assetsDossier/img/new/icon2.png" alt="">
                <div class="media-body">
                    <a href="#">
                        <h4>Community Forums</h4>
                    </a>
                    <p>245 Posts</p>
                </div>
            </div>
            <div class="media doc_features_item wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="0.7s">
                <img src="../../../assetsDossier/img/new/icon3.png" alt="">
                <div class="media-body">
                    <a href="#">
                        <h4>Documentation</h4>
                    </a>
                    <p>245 Posts</p>
                </div>
            </div>
            <div class="media doc_features_item wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="0.8s">
                <img src="../../../assetsDossier/img/new/icon4.png" alt="">
                <div class="media-body">
                    <a href="#">
                        <h4>Working with Docs</h4>
                    </a>
                    <p>245 Posts</p>
                </div>
            </div>
            <div class="media doc_features_item wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="0.9s">
                <img src="../../../assetsDossier/img/new/icon5.png" alt="">
                <div class="media-body">
                    <a href="#">
                        <h4>Getting Started</h4>
                    </a>
                    <p>245 Posts</p>
                </div>
            </div>
            <div class="media doc_features_item wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1s">
                <img src="../../../assetsDossier/img/new/icon6.png" alt="">
                <div class="media-body">
                    <a href="#">
                        <h4>Account Management</h4>
                    </a>
                    <p>245 Posts</p>
                </div>
            </div>
            <div class="media doc_features_item wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="0.7s">
                <img src="../../../assetsDossier/img/new/icon7.png" alt="">
                <div class="media-body">
                    <a href="#">
                        <h4>Productivity</h4>
                    </a>
                    <p>245 Posts</p>
                </div>
            </div>
            <div class="media doc_features_item wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="0.8s">
                <img src="../../../assetsDossier/img/new/icon8.png" alt="">
                <div class="media-body">
                    <a href="#">
                        <h4>Docs in Help Scout</h4>
                    </a>
                    <p>245 Posts</p>
                </div>
            </div>
            <div class="media doc_features_item wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="0.9s">
                <img src="../../../assetsDossier/img/new/icon9.png" alt="">
                <div class="media-body">
                    <a href="#">
                        <h4>Formatting Content</h4>
                    </a>
                    <p>245 Posts</p>
                </div>
            </div>
            <div class="see_more_item collapse-wrap">
                <div class="media doc_features_item">
                    <img src="../../../assetsDossier/img/new/icon7.png" alt="">
                    <div class="media-body">
                        <a href="#">
                            <h4>Productivity</h4>
                        </a>
                        <p>245 Posts</p>
                    </div>
                </div>
                <div class="media doc_features_item">
                    <img src="../../../assetsDossier/img/new/icon8.png" alt="">
                    <div class="media-body">
                        <a href="#">
                            <h4>Docs in Help Scout</h4>
                        </a>
                        <p>245 Posts</p>
                    </div>
                </div>
                <div class="media doc_features_item">
                    <img src="../../../assetsDossier/img/new/icon9.png" alt="">
                    <div class="media-body">
                        <a href="#">
                            <h4>Formatting Content</h4>
                        </a>
                        <p>245 Posts</p>
                    </div>
                </div>
            </div>
            <a href="#more-features" class="collapse-btn see_btn">
                <i class="arrow_carrot-down_alt2"></i>
                <span class="text">Show More</span>
            </a>
        </div>
    </div>
</section>
<section class="recommended_topic_area">
    <div class="container">
        <div class="recommended_topic_inner">
            <img class="doc_shap_one" src="../../../assetsDossier/img/new/shap.png" alt="">
            <div class="doc_round one" data-parallax='{"x": -80, "y": -100, "rotateY":0}'></div>
            <div class="doc_round two" data-parallax='{"x": -10, "y": 70, "rotateY":0}'></div>
            <div class="doc_title text-center">
                <h2 class="wow fadeInUp" data-wow-delay="0.2s">Recommended Topics</h2>
                <p class="wow fadeInUp" data-wow-delay="0.4s">Loaded with awesome features like Documentation,
                    Knowledgebase,<br> Forum & more!</p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="recommended_item wow fadeInUp" data-wow-delay="0.2s">
                        <img src="../../../assetsDossier/img/new/smile.png" alt="">
                        <a href="#">
                            <h3>Getting Started</h3>
                        </a>
                        <ul class="list-unstyled">
                            <li><a href="#">Welcome to Ghost</a></li>
                            <li><a href="#">Writing posts with Ghost</a></li>
                            <li><a href="#">Publishing options</a></li>
                            <li><a href="#">Managing admin settings</a></li>
                            <li><a href="#">Organising your content</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="recommended_item wow fadeInUp" data-wow-delay="0.3s">
                        <img src="../../../assetsDossier/img/new/house.png" alt="">
                        <a href="#">
                            <h3>Advanced Usage</h3>
                        </a>
                        <ul class="list-unstyled">
                            <li><a href="#">Getting started</a></li>
                            <li><a href="#">Become a Pro</a></li>
                            <li><a href="#">Admin & Billing</a></li>
                            <li><a href="#">Mobile App</a></li>
                            <li><a href="#">Guides</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="recommended_item wow fadeInUp" data-wow-delay="0.4s">
                        <img src="../../../assetsDossier/img/new/doc.png" alt="">
                        <a href="#">
                            <h3>Knowledge Base</h3>
                        </a>
                        <ul class="list-unstyled">
                            <li><a href="#">Organising content in Ghost</a></li>
                            <li><a href="#">Using the editor</a></li>
                            <li><a href="#">General publication settings</a></li>
                            <li><a href="#">Publishing Options</a></li>
                            <li><a href="#">Knowledge Base</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="recommended_item wow fadeInUp" data-wow-delay="0.5s">
                        <img src="../../../assetsDossier/img/new/bag.png" alt="">
                        <a href="#">
                            <h3>User Settings</h3>
                        </a>
                        <ul class="list-unstyled">
                            <li><a href="#">How do I reset my password</a></li>
                            <li><a href="#">Managing your team</a></li>
                            <li><a href="#">Can I add my social accounts</a></li>
                            <li><a href="#">Imports and exports</a></li>
                            <li><a href="#">Design Settings</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="text-center wow fadeInUp" data-wow-delay="0.2s">
                <a href="#" class="question_text">Want to know more or have a<br> Question?
                </a>
            </div>
        </div>
    </div>
</section>
<section class="doc_community_area">
    <img class="shap_one" src="../../../assetsDossier/img/new/community_bg_shap_one.png" alt="">
    <img class="shap_two" src="../../../assetsDossier/img/new/community_bg_shap_two.png" alt="">
    <div class="container">
        <div class="doc_title text-center">
            <h2 class="wow fadeInUp" data-wow-delay="0.2s">How Docy works</h2>
            <p class="wow fadeInUp" data-wow-delay="0.4s">Learn languages online with the world's best tutors
            </p>
        </div>
        <div class="doc_community_info">
            <div class="doc_community_item wow fadeInUp" data-wow-delay="0.2s">
                <div class="doc_community_icon">
                    <i class="icon_folder-alt"></i>
                </div>
                <div class="doc_entry_content">
                    <a href="#">
                        <h4>The Intercom Messenger</h4>
                    </a>
                    <p>Setting up and customizing your Messenger to start chatting with customers</p>
                    <div class="doc_entry_info">
                        <ul class="list-unstyled author_avatar">
                            <li><img src="../../../assetsDossier/img/new/img_02.png" alt=""></li>
                            <li><img src="../../../assetsDossier/img/new/img_03.png" alt=""></li>
                            <li><img src="../../../assetsDossier/img/new/img_04.png" alt=""></li>
                            <li>+2</li>
                        </ul>
                        <div class="text">
                            76 articles in this collection<br> Written by Ruairí Galavan, Jack Jenkins, DJ and 7
                            others
                        </div>
                    </div>
                </div>
            </div>
            <div class="doc_community_item wow fadeInUp" data-wow-delay="0.3s">
                <div class="doc_community_icon">
                    <i class="icon_comment_alt"></i>
                </div>
                <div class="doc_entry_content">
                    <a href="#">
                        <h4>The Intercom Messenger</h4>
                    </a>
                    <p>Setting up and customizing your Messenger to start chatting with customers</p>
                    <div class="doc_entry_info">
                        <ul class="list-unstyled author_avatar">
                            <li><img src="../../../assetsDossier/img/new/img_02.png" alt=""></li>
                            <li><img src="../../../assetsDossier/img/new/img_03.png" alt=""></li>
                            <li><img src="../../../assetsDossier/img/new/img_04.png" alt=""></li>
                            <li>+2</li>
                        </ul>
                        <div class="text">
                            76 articles in this collection<br> Written by Ruairí Galavan, Jack Jenkins, DJ and 7
                            others
                        </div>
                    </div>
                </div>
            </div>
            <div class="doc_community_item wow fadeInUp" data-wow-delay="0.4s">
                <div class="doc_community_icon">
                    <i class=" icon_lightbulb_alt"></i>
                </div>
                <div class="doc_entry_content">
                    <a href="#">
                        <h4>The Intercom Messenger</h4>
                    </a>
                    <p>Setting up and customizing your Messenger to start chatting with customers</p>
                    <div class="doc_entry_info">
                        <ul class="list-unstyled author_avatar">
                            <li><img src="../../../assetsDossier/img/new/img_02.png" alt=""></li>
                            <li><img src="../../../assetsDossier/img/new/img_03.png" alt=""></li>
                            <li><img src="../../../assetsDossier/img/new/img_04.png" alt=""></li>
                            <li>+2</li>
                        </ul>
                        <div class="text">
                            76 articles in this collection<br> Written by Ruairí Galavan, Jack Jenkins, DJ and 7
                            others
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center wow fadeInUp" data-wow-delay="0.4s">
                <a href="#" class="question_text">Contact us and we’ll get back to you<br>
                    as soon as we can.
                </a>
            </div>
        </div>
    </div>
</section>
<section class="doc_testimonial_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="doc_testimonial_slider">
                    <div class="item">
                        <h3>Tinkety tonk old fruit victoria sponge squiffy bleeder twit the bee's knees loo
                            David, buggered haggle pear shaped bubble and squeak.”</h3>
                        <div class="name">Penny Tool, <span>Director of Sales and Success</span></div>
                        <a href="#" class="sign"><img src="../../../assetsDossier/img/new/sign.png" alt=""></a>
                    </div>
                    <div class="item">
                        <h3>Hendrerit laoreet incidunt molestie eum placeat, neque ridiculus? Maecenas
                            incididunt aperiam tempora cumque quos?”</h3>
                        <div class="name">Penny Tool, <span>Director of Sales and Success</span></div>
                        <a href="#" class="sign"><img src="../../../assetsDossier/img/new/sign.png" alt=""></a>
                    </div>
                    <div class="item">
                        <h3>Curabitur vitae dignissimos pulvinar eligendi ullamcorper, laoreet, accusantium
                            numquam habitant quaerat minim consequatur”</h3>
                        <div class="name">Penny Tool, <span>Director of Sales and Success</span></div>
                        <a href="#" class="sign"><img src="../../../assetsDossier/img/new/sign.png" alt=""></a>
                    </div>
                    <div class="item">
                        <h3>Tinkety tonk old fruit victoria sponge squiffy bleeder twit the bee's knees loo
                            David, buggered haggle pear shaped bubble and squeak.”</h3>
                        <div class="name">Penny Tool, <span>Director of Sales and Success</span></div>
                        <a href="#" class="sign"><img src="../../../assetsDossier/img/new/sign.png" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="doc_img_slider">
                    <div class="item">
                        <img class="dot" src="../../../assetsDossier/img/new/dot.png" alt="">
                        <div class="round one"></div>
                        <div class="round two"></div>
                        <img src="../../../assetsDossier/img/new/feedback_img.jpg" alt="">
                    </div>
                    <div class="item">
                        <img class="dot" src="../../../assetsDossier/img/new/dot.png" alt="">
                        <div class="round one"></div>
                        <div class="round two"></div>
                        <img src="../../../assetsDossier/img/new/feedback_img_02.jpg" alt="">
                    </div>
                    <div class="item">
                        <img class="dot" src="../../../assetsDossier/img/new/dot.png" alt="">
                        <div class="round one"></div>
                        <div class="round two"></div>
                        <img src="../../../assetsDossier/img/new/feedback_img_03.jpg" alt="">
                    </div>
                    <div class="item">
                        <img class="dot" src="../../../assetsDossier/img/new/dot.png" alt="">
                        <div class="round one"></div>
                        <div class="round two"></div>
                        <img src="../../../assetsDossier/img/new/feedback_img_04.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="doc_subscribe_area">
    <div class="container">
        <div class="doc_subscribe_inner">
            <img class="one" src="../../../assetsDossier/img/new/subscribe_shap.png" alt="">
            <img class="two" src="../../../assetsDossier/img/new/subscribe_shap_two.png" alt="">
            <div class="text wow fadeInLeft" data-wow-delay="0.2s">
                <h2>Great Customer <br>Relationships start here</h2>
            </div>
            <form action="#" class="doc_subscribe_form wow fadeInRight mailchimp" data-wow-delay="0.4s" method="post">
                <div class="form-group">
                    <div class="input-fill">
                        <input type="email" name="EMAIL" id="email" class="memail" placeholder="Your work email">
                    </div>
                    <button type="submit" class="submit_btn">Get started</button>
                    <p class="mchimp-errmessage" style="display: none;"></p>
                    <p class="mchimp-sucmessage" style="display: none;"></p>
                </div>
                <ul class="list-unstyled">
                    <li><a href="#">Messenger</a></li>
                    <li><a href="#">Product Tours</a></li>
                    <li><a href="#">Inbox and more</a></li>
                </ul>

            </form>
        </div>
    </div>
</section>

@endsection