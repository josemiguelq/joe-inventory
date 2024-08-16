<div>
    <div class="page-body">
        <div class="container-xl">
            <div class="row">
                <div class="col-lg-4">
                    <img class="rounded-t-lg shadow"
                         src="https://http2.mlstatic.com/D_NQ_NP_2X_693406-MLB54620373230_032023-F.webp" alt=""/>
                </div>
                <div class="col-lg-4">
                    <h1 style="font-size: 34px"><b>{{$reference->name}}</b></h1>
                    <h1 style="font-size: 32px">R$ 1.200,50 </h1>
                    <p>Detalhes</p>
                    <div>
                        <a href={{"https://api.whatsapp.com/send?phone=5567991910049&text=produto%20%0A"."Iphone"}}
                    class="btn btn-primary w-100"/>
                        Comprar agora
                        </a>
                        <button type="submit" class="btn btn-secondary w-100">
                            Adicionar ao carrinho
                        </button>
                    </div>
                    <p><b>Versões:</b></p>
                    <div class="row">
                        @foreach($products as $result)
                            {{--                        {{$result->product}}--}}
                            <div class="col-3">
                                <img class="rounded-t-lg shadow"
                                     src="https://http2.mlstatic.com/D_NQ_NP_2X_693406-MLB54620373230_032023-F.webp"
                                     alt=""/>
                                <p>{{$result->product->name}}</p>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
