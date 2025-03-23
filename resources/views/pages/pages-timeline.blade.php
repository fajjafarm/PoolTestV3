@extends('layouts.vertical', ['title' => 'Timeline'])


@section('content')
    @include('layouts.partials.page-title', ['subtitle' => 'Pages', 'title' => 'Timeline'])

    <div class="row justify-content-center">
        <div class="col-xxl-12">
            <div class="text-center mb-4">
                <h2 class="textdark fw-bold">Our Company Milestone</h2>
            </div>
            <div class="timeline" dir="ltr">
                <div class="timeline-show mb-3 text-center">
                    <h5 class="m-0 time-show-name">Today</h5>
                </div>

                <div class="timeline-lg-item timeline-item-left">
                    <div class="timeline-desk">
                        <div class="timeline-box">
                            <span class="arrow-alt shadow-none"></span>
                            <span class="timeline-icon avatar-lg">
                                <span class="avatar-title bg-light rounded-circle">
                                    <iconify-icon icon="solar:check-circle-bold-duotone"
                                        class="text-success fs-28"></iconify-icon>
                                </span>
                            </span>
                            <div class="d-flex justify-content-between gap-2">
                                <h4 class="fw-bold text-dark mb-0">01</h4>
                                <div class="text-end">
                                    <p class="mb-0 fw-medium">23 May 2024</p>

                                </div>
                            </div>
                            <div class="mt-2">
                                <div class="d-flex justify-content-between">
                                    <p class="mb-2 text-dark fw-semibold fs-16">Project Completed: Achievements and Outcomes
                                    </p>
                                    <p class="mb-0">1hr Ago</p>
                                </div>
                                <p class="mb-1"><i class="ti ti-checks text-success me-1 fs-16"></i>Successfully met all
                                    project goals and objectives within the stipulated timeline.</p>
                                <p class="mb-0"><i class="ti ti-checks text-success me-1 fs-16"></i>Delivered high-quality
                                    outputs that meet or exceed the expectations of stakeholders.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="timeline-lg-item timeline-item-right">
                    <div class="timeline-desk">
                        <div class="timeline-box">
                            <span class="arrow shadow-none"></span>
                            <span class="timeline-icon avatar-lg">
                                <span class="avatar-title bg-light rounded-circle">
                                    <iconify-icon icon="solar:user-bold-duotone" class="text-primary fs-28"></iconify-icon>
                                </span>
                            </span>
                            <div class="d-flex justify-content-between gap-2">
                                <h4 class="fw-bold text-dark mb-0">02</h4>
                                <div class="text-end">
                                    <p class="mb-0 fw-medium">23 May 2024</p>

                                </div>
                            </div>
                            <div class="d-flex align-items-center  gap-2 my-3">
                                <img src="/images/users/avatar-10.jpg" alt=""
                                    class="avatar-lg rounded-circle border border-light border-2">
                                <div>
                                    <p class="text-dark fw-medium fs-15 mb-0">Sara Johnson</p>
                                    <p class="mb-0">srajhnson@yeti.com</p>
                                </div>
                                <div class="ms-auto">
                                    <p class="mb-0">2hr Ago</p>
                                </div>
                            </div>
                            <p class="mb-2 text-dark fw-semibold fs-16">Join as a full stack developers</p>
                            <span class="badge bg-light-subtle border text-dark fw-medium px-2 py-1 fs-12">html</span>
                            <span class="badge bg-light-subtle border text-dark fw-medium px-2 py-1 fs-12">CSS</span>
                            <span class="badge bg-light-subtle border text-dark fw-medium px-2 py-1 fs-12">JavaScript</span>
                            <span class="badge bg-light-subtle border text-dark fw-medium px-2 py-1 fs-12">NodeJS</span>
                            <span class="badge bg-light-subtle border text-dark fw-medium px-2 py-1 fs-12">ExpressJS</span>
                            <span class="badge bg-light-subtle border text-dark fw-medium px-2 py-1 fs-12">ExpressJS</span>
                            <span class="badge bg-light-subtle border text-dark fw-medium px-2 py-1 fs-12">Django</span>
                            <span class="badge bg-light-subtle border text-dark fw-medium px-2 py-1 fs-12">MySQL</span>
                            <span
                                class="badge bg-light-subtle border text-dark fw-medium px-2 py-1 fs-12 my-1">PostgreSQL</span>
                        </div>
                    </div>
                </div>


                <div class="timeline-lg-item timeline-item-left">
                    <div class="timeline-desk">
                        <div class="timeline-box">
                            <span class="arrow-alt shadow-none"></span>
                            <span class="timeline-icon avatar-lg">
                                <span class="avatar-title bg-light rounded-circle">
                                    <iconify-icon icon="solar:document-add-bold-duotone"
                                        class="text-warning fs-28"></iconify-icon>
                                </span>
                            </span>
                            <div class="d-flex justify-content-between gap-2">
                                <h4 class="fw-bold text-dark mb-0">03</h4>
                                <div class="text-end">
                                    <p class="mb-0 fw-medium">23 May 2024</p>

                                </div>
                            </div>
                            <div class="mt-2">
                                <div class="d-flex justify-content-between">
                                    <p class="mb-2 text-dark fw-semibold fs-16">Started Company Meeting</p>
                                    <p class="mb-0">2hr Ago</p>
                                </div>
                                <div class="d-flex flex-wrap align-items-center my-1 gap-1">
                                    <div class="avatar-group">
                                        <div class="avatar">
                                            <img src="/images/users/avatar-4.jpg" alt=""
                                                class="rounded-circle avatar-sm">
                                        </div>
                                        <div class="avatar">
                                            <img src="/images/users/avatar-5.jpg" alt=""
                                                class="rounded-circle avatar-sm">
                                        </div>
                                        <div class="avatar">
                                            <img src="/images/users/avatar-6.jpg" alt=""
                                                class="rounded-circle avatar-sm">
                                        </div>
                                        <div class="avatar">
                                            <img src="/images/users/avatar-7.jpg" alt=""
                                                class="rounded-circle avatar-sm">
                                        </div>
                                        <div class="avatar">
                                            <div class="avatar-sm">
                                                <span class="avatar-title bg-dark text-white fs-18 rounded-circle">
                                                    <i class="ti ti-plus"></i>
                                                </span>
                                            </div>
                                        </div>

                                    </div>
                                    <p class="mb-0 ms-1 fs-14">+23 Employee Join Meeting </p>
                                </div>
                                <p class="mb-0 mt-3 text-dark fw-semibold">Topic : <span class="text-muted fw-medium">New
                                        project and admin dashboard</span></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="timeline-lg-item timeline-item-right">
                    <div class="timeline-desk">
                        <div class="timeline-box">
                            <span class="arrow shadow-none"></span>
                            <span class="timeline-icon avatar-lg">
                                <span class="avatar-title bg-light rounded-circle">
                                    <iconify-icon icon="solar:graph-new-up-bold-duotone"
                                        class="text-success fs-28"></iconify-icon>
                                </span>
                            </span>
                            <div class="d-flex justify-content-between gap-2">
                                <h4 class="fw-bold text-dark mb-0">04</h4>
                                <div class="text-end">
                                    <p class="mb-0 fw-medium">23 May 2024</p>
                                </div>
                            </div>
                            <div class="mt-3">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <h4 class="text-dark mb-0 fw-semibold"> New Admin Release In Bootstrap <span
                                            class="badge bg-success-subtle text-success px-2 py-1 fs-11 ms-1">New
                                            Release</span></h4>
                                    <p class="mb-0">3hr Ago</p>
                                </div>
                                <p>Get started with our company of web components and interactive elements built on top of
                                    Bootstrap.</p>
                                <div class="timeline-album mb-3">
                                    <a href="javascript: void(0);">
                                        <img src="/images/small/small-7.jpg" alt="" class="rounded-3">
                                    </a>
                                    <a href="javascript: void(0);">
                                        <img src="/images/small/small-4.jpg" alt="" class="rounded-3">
                                    </a>
                                    <a href="javascript: void(0);">
                                        <img src="/images/small/small-1.jpg" alt="" class="rounded-3">
                                    </a>
                                    <a href="javascript: void(0);">
                                        <img src="/images/small/small-2.jpg" alt="" class="rounded-3">
                                    </a>
                                </div>
                                <a href="#!" class="btn btn-primary btn-sm">Show More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="timeline-lg-item timeline-item-left">
                    <div class="timeline-desk">
                        <div class="timeline-box">
                            <span class="arrow-alt shadow-none"></span>
                            <span class="timeline-icon avatar-lg">
                                <span class="avatar-title bg-light rounded-circle">
                                    <iconify-icon icon="solar:presentation-graph-bold-duotone"
                                        class="text-primary fs-28"></iconify-icon>
                                </span>
                            </span>
                            <div class="d-flex justify-content-between gap-2">
                                <h4 class="fw-bold text-dark mb-0">05</h4>
                                <div class="text-end">
                                    <p class="mb-0 fw-medium">23 May 2024</p>
                                </div>
                            </div>
                            <div class="mt-3">
                                <div class="d-flex align-items-center  gap-2 my-3">
                                    <img src="/images/users/avatar-5.jpg" alt=""
                                        class="avatar-lg rounded-circle border border-light border-2">
                                    <div>
                                        <h4 class="text-dark  fw-semibold"> Assigned to serve as the project's director
                                        </h4>
                                        <span class="text-dark"><small>by <a href="#!" class="text-primary">John N.
                                                    Ward.</a></small></span>
                                    </div>
                                    <div class="ms-auto">
                                        <p class="mb-0">3hr Ago</p>
                                    </div>
                                </div>
                                <p class="mb-0">I've come across your posts and found some favorable deals on your page.
                                    I've added a load of products to the cart and I don't know the payment options you
                                    avail. Also, can you enlighten me about any discount</p>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="timeline-show my-3 text-center">
                    <h5 class="m-0 time-show-name">Yesterday</h5>
                </div>


                <div class="timeline-lg-item timeline-item-right">
                    <div class="timeline-desk">
                        <div class="timeline-box">
                            <span class="arrow shadow-none"></span>
                            <span class="timeline-icon avatar-lg">
                                <span class="avatar-title bg-light rounded-circle">
                                    <iconify-icon icon="solar:code-circle-bold-duotone"
                                        class="text-warning fs-28"></iconify-icon>
                                </span>
                            </span>
                            <div class="d-flex justify-content-between gap-2">
                                <h4 class="fw-bold text-dark mb-0">01</h4>
                                <div class="text-end">
                                    <p class="mb-0 fw-medium">22 May 2024</p>
                                </div>
                            </div>
                            <div class="mt-3">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <h4 class="text-dark mb-0  fw-semibold"> We have achieved 5.6k sales in our themes.
                                    </h4>
                                    <p class="mb-0">1day Ago</p>
                                </div>
                                <p class="mb-0">As we celebrate this achievement, we remain focused on our mission to
                                    deliver top-notch themes that meet the evolving needs of our users. We are excited about
                                    the future and are dedicated to reaching new heights, expanding our offerings, and
                                    maintaining the high standards that have earned us this success</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="timeline-lg-item timeline-item-left">
                    <div class="timeline-desk">
                        <div class="timeline-box">
                            <span class="arrow-alt shadow-none"></span>
                            <span class="timeline-icon avatar-lg">
                                <span class="avatar-title bg-light rounded-circle">
                                    <iconify-icon icon="solar:book-bookmark-bold-duotone"
                                        class="text-success fs-28"></iconify-icon>
                                </span>
                            </span>
                            <div class="d-flex justify-content-between gap-2">
                                <h4 class="fw-bold text-dark mb-0">02</h4>
                                <div class="text-end">
                                    <p class="mb-0 fw-medium">22 May 2024</p>
                                </div>
                            </div>
                            <div class="mt-3">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="avatar-lg">
                                        <span class="avatar-title bg-light rounded-circle">
                                            <iconify-icon icon="solar:monitor-bold"
                                                class="text-primary fs-28"></iconify-icon>
                                        </span>
                                    </div>
                                    <div>
                                        <h4 class="text-dark mb-0  fw-semibold"> Website Launched</h4>
                                        <p class="text-muted fw-medium fs-14 mt-1 mb-0"><span class="text-dark">Name :
                                            </span> Ocen</p>
                                    </div>
                                </div>
                                <p class="mb-0 mt-2">Creating a simple Bootstrap website involves using the Bootstrap
                                    framework to style and layout your HTML content. </p>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end timeline -->

            </div> <!-- end col -->
        </div>
        <!-- end row -->

    </div> <!-- container -->
@endsection
