<div class=""><span class="badge bg-green rounded-0">{{$comment->rate}}<i class="bi bi-star-fill ms-1"></i></span></div>

                        <div class="flex-grow-1">
                          <p class="mb-2">{{$comment->comment}}</p>
                          <div class="review-img">
                            <img src="{{asset('v1/assets/images/featured-products/05.webp')}}" alt="" width="70">
                          </div>
                          <div class="d-flex flex-column flex-sm-row gap-3 mt-3">
                            <div class="hstack flex-grow-1 gap-3">
                              <p class="mb-0">{{$comment->client_name}}</p>
                              <div class="vr"></div>
                              <div class="date-posted">{{$comment->created_at}}</div>
                            </div>
                            {{-- <div class="hstack">
                              <div class=""><i class="bi bi-hand-thumbs-up me-2"></i>68</div>
                              <div class="mx-3"></div>
                              <div class=""><i class="bi bi-hand-thumbs-down me-2"></i>24</div>
                            </div> --}}
                          </div>
                        </div>
                      </div>
                      <hr>

