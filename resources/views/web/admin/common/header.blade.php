<nav class="navbar navbar-expand-lg bg-transparent ">
    <div class="container-fluid  px-3">

        <h6 class="navbar-brand navbar-brand-head mb-0"> <span class="me-2">S</span>eSchool</h6>
        <span class="standard-head-span">Standard</span>
        <form class="d-flex form-for-search-header">
            <input class="form-control ms-lg-3 ms-0 for-input-img" type="text" placeholder="Search" aria-label="Search">

        </form>
        <!-- Toggle Button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#authMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapsible Content -->
        <div class="collapse navbar-collapse justify-content-end" id="authMenu">
            <div class="d-flex align-items-center gap-2 div-for-header-content py-sm-0 py-3">
                <div class="academic-year-wrapper ">
                    <select id="academicYear" class="form-select">
                        <option value="2024-2025" selected>Academic Year : 2024 / 2025</option>
                        <option value="2023-2024">Academic Year : 2023 / 2024</option>
                        <option value="2022-2023">Academic Year : 2022 / 2023</option>
                    </select>
                </div>
                <a href="#" class="text-center ai-chat-span"><span >AI Chat</span></a>
                <a href="#"><span class="span-for-header-content"><img src="{{asset('web/assets/images/flag.png')}}"
                            alt=""></span></a>
                <a href="#"><span class="span-for-header-content"><img src="{{asset('web/assets/images/plusv.png')}}"
                            alt=""></span></a>
                <a href="#"><span class="span-for-header-content"><img src="{{asset('web/assets/images/massageh.png')}}"
                            alt=""></span></a>
                <a href="#"><span class="span-for-header-content-img"><img
                            src="{{asset('web/assets/images/userh.png')}}" alt=""></span></a>


            </div>
        </div>

    </div>
</nav>