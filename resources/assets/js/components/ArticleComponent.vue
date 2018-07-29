<template>
    <div>
        <div class="card features" v-for="article in articles" :key="article.id">
            <div class="card-body">
                <div class="media">
                    <div class="media-body">
                        <h4 class="card-title">{{ article.title }}</h4>
                        <read-more class="card-text" more-str="اقرا المزيد" less-str="إغلاق" :text="article.body" :max-chars="100" link="#"></read-more>
                        <div class="card-text" v-if="user">
                            <a :href="'/article/' + article.slug + '/edit'">تعديل</a>
                         </div>
                        <div class="card-text" v-if="user">
                            <form :action="'/article/' + article.slug" method="delete" id="destroy">
                            <a href="javascript:;" class="nav-link" onclick="document.getElementById('destroy').submit();">حذف</a>
                            <input type="hidden" name="_token" :value="csrf">
                            <input type="hidden" name="_method" value="DELETE">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pagination justify-content-center">
            <button class="btn btn-default" @click="getArtciles(pagination.prev_page_url)"
                    :disabled="!pagination.prev_page_url">
                السابق
            </button>
            <span>الصفحة {{pagination.current_page}} من {{pagination.last_page}}</span>
            <button class="btn btn-default" @click="getArtciles(pagination.next_page_url)"
                    :disabled="!pagination.next_page_url">التالي
            </button>
        </div>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                articles: [],
                artilceUrl: '/article',
                userUrl: '/auth',
                pagination: {},
                user: false,
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        },
        created() {
            this.getArtciles();
            this.getAuthUser();
        },
        methods: {
            getArtciles(page_url) {
                page_url = page_url || this.artilceUrl;
                axios.get(page_url)
                .then(response => {
                    this.makePagination(response.data);
                    this.articles = response.data.data;
                });
            },
            makePagination(data){
                let pagination = {
                    current_page: data.current_page,
                    last_page: data.last_page,
                    next_page_url: data.next_page_url,
                    prev_page_url: data.prev_page_url
                }
                this.pagination = pagination;
            },
            getAuthUser()
            {
                axios.get(this.userUrl)
                .then(response => {
                    this.user = response.data;
                });
            }
        }
    }
</script>
