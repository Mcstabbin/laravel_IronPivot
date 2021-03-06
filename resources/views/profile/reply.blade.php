                                <div class="media">
                                    <a class="pull-left" href="{{ route('profile.index', ['username' => $reply->user->username]) }}">
                                        <img class="media-object" alt="{{ $reply->user->getNameOrUsername() }}" src="{{ $reply->user->getAvatarUrl() }}">
                                    </a>
                                    <div class="media-body">
                                        <h5 class="media-heading"><a href="{{ route('profile.index', ['username' => $reply->user->username]) }}">{{ $reply->user->getNameOrUsername() }}</a></h5>
                                        <p>{{ $reply->body }}</p>
                                        <ul class="list-inline">
                                            <li>{{ $reply->created_at->diffForHumans() }}</li>
                                            @if ($reply->user->id !== Auth::user()->id)
                                                <li><a href="{{ route('status.like', ['statusId' => $reply->id]) }}">Like</a></li>
                                            @endif
                                            <li>{{ $reply->likes->count() }} {{ str_plural('like', $reply->likes->count()) }}</li>
                                        </ul>
                                    </div>
                                </div>