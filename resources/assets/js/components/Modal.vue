<template>
    <transition name="modal">
        <div class="modal show">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <header class="modal-header">
                        <slot name="header">
                            <h3 class="modal-title">Edit Article</h3>
                        </slot>
                        <button type="button" class="close" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </header>
                    <div class="modal-body">
                        <slot name="content">
                        </slot>
                    </div>
                    <footer class="modal-footer">
                        <slot name="footer">
                        </slot>
                    </footer>
                </div>
            </div>
        </div>
        <div class="modal-backdrop"></div>
    </transition>
</template>

<script>
    export default{
        props: {
            item: {
                type: null
            }
        },
        mounted (){
            console.log(this.item);
        }

    }
</script>

<style>
    .modal-enter {
        opacity: 0;
    }

    .modal-leave-active {
        opacity: 0;
    }

    .modal-enter .modal-container,
    .modal-leave-active .modal-container {
        -webkit-transform: scale(1.1);
        transform: scale(1.1);
    }
</style>