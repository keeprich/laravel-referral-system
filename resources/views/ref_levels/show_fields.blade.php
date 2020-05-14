<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $refLevel->name }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $refLevel->description }}</p>
</div>

<!-- Reward Field -->
<div class="form-group">
    {!! Form::label('reward', 'Reward:') !!}
    <p>{{ $refLevel->reward }}</p>
</div>

<!-- Congratulatory Message Field -->
<div class="form-group">
    {!! Form::label('congratulatory_message', 'Congratulatory Message:') !!}
    <p>{{ $refLevel->congratulatory_message }}</p>
</div>

<!-- Target No Referrals Field -->
<div class="form-group">
    {!! Form::label('target_no_referrals', 'Target No Referrals:') !!}
    <p>{{ $refLevel->target_no_referrals }}</p>
</div>

<!-- Points Per Referral Field -->
<div class="form-group">
    {!! Form::label('points_per_referral', 'Points Per Referral:') !!}
    <p>{{ $refLevel->points_per_referral }}</p>
</div>

