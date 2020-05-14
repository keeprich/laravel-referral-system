<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Reward Field -->
<div class="form-group col-sm-6">
    {!! Form::label('reward', 'Reward:') !!}
    {!! Form::text('reward', null, ['class' => 'form-control']) !!}
</div>

<!-- Congratulatory Message Field -->
<div class="form-group col-sm-6">
    {!! Form::label('congratulatory_message', 'Congratulatory Message:') !!}
    {!! Form::text('congratulatory_message', null, ['class' => 'form-control']) !!}
</div>

<!-- Target No Referrals Field -->
<div class="form-group col-sm-6">
    {!! Form::label('target_no_referrals', 'Target No Referrals:') !!}
    {!! Form::text('target_no_referrals', null, ['class' => 'form-control']) !!}
</div>

<!-- Points Per Referral Field -->
<div class="form-group col-sm-6">
    {!! Form::label('points_per_referral', 'Points Per Referral:') !!}
    {!! Form::text('points_per_referral', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('refLevels.index') }}" class="btn btn-default">Cancel</a>
</div>
