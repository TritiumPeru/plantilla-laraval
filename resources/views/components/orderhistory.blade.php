<div>
    <!-- Simplicity is an acquired taste. - Katharine Gerould -->
    @props(['id', 'orderId','name','dateTime','orderUser','orderImage1','orderTitle1','orderText1','orderTitle2','orderTitle3','orderImage2','orderTitle4','orderText2','orderTitle5','orderTitle6','orderText3','orderTitle7'])

<div>
<div class="card order-history-card">
    <div class="card-body">
        <div class="d-flex align-items-center justify-content-between mb-5">
            <div class="">
                <h6 class="heading-title mb-2">{{$orderId}}</h6>
                <p class="mb-0">{{$dateTime}}</p>
            </div>
            <img src="{{asset('images/')}}/{{$orderUser}}" class="img-fluid rounded-pill avatar-50" alt="">
        </div>
        <div class="d-flex">
            <img src="{{asset('images/')}}/{{$orderImage1}}" class="img-fluid rounded-pill avatar-60" alt="">
            <div class="ms-4 order-history">
                <h6 class="mb-2 heading-title fw-bolder">{{$orderTitle1}}</h6>
                <p>{{$orderText1}}</p>
                <div class="d-flex justify-content-between align-items-center">
                    <h6 class="heading-title fw-bolder">{{$orderTitle2}}</h6>
                    <h6 class="heading-title fw-bolder">{{$orderTitle3}}</h6>
                </div>
                <hr class="my-4">
            </div>
        </div>
        <div class="d-flex">
            <img src="{{asset('images/')}}/{{$orderImage2}}" class="img-fluid rounded-pill avatar-60" alt="">
            <div class="ms-4">
                <h6 class="mb-2 heading-title fw-bolder">{{$orderTitle4}}</h6>
                <p>{{$orderText2}}</p>
                <div class="d-flex justify-content-between align-items-center">
                    <h6 class="heading-title fw-bolder">{{$orderTitle5}}</h6>
                    <h6 class="heading-title fw-bolder">{{$orderTitle6}}</h6>
                </div>
            </div>
        </div>
        <hr>
        <div class="d-flex justify-content-between align-items-center">
            <div class="">
                <p class="mb-0">{{$orderText3}}</p>
                <h6 class="heading-title fw-bolder">{{$orderTitle7}}</h6>
            </div>
            <div class="d-flex align-items-center" id="action-{{$id}}">
                <button class="btn btn-icon btn-outline-success rounded ctc-button" data-action="click" data-closest="#action-{{$id}}" data-status="complete">
                    <span class="btn-inner d-flex align-items-center">
                        <span>
                            <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.667969 4.09434L3.93567 7.33366L10.668 0.666992" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span>
                        <span class="status">Completed</span>
                    </span>
                </button>
                <button class="btn btn-icon btn-outline-danger rounded ctc-button ms-3" data-action="click" data-closest="#action-{{$id}}" data-status="reject">
                    <span class="btn-inner d-flex align-items-center">
                        <span>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.6654 5.33496L5.33203 10.6683" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M10.6643 10.6663L5.33203 5.33301" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span>
                        <span class="status">Rejected</span>
                    </span>
                </button>
            </div>
        </div>
    </div>
</div>
</div>
</div>